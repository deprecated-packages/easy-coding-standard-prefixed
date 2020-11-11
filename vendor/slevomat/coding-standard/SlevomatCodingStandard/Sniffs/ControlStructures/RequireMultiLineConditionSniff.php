<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\ControlStructures;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\FixerHelper;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function count;
use function in_array;
use function sprintf;
use function strlen;
use const _PhpScoper2fe14d6302bc\T_CLOSE_PARENTHESIS;
use const _PhpScoper2fe14d6302bc\T_OPEN_PARENTHESIS;
class RequireMultiLineConditionSniff extends \SlevomatCodingStandard\Sniffs\ControlStructures\AbstractLineCondition
{
    public const CODE_REQUIRED_MULTI_LINE_CONDITION = 'RequiredMultiLineCondition';
    /** @var int */
    public $minLineLength = 121;
    /** @var bool */
    public $booleanOperatorOnPreviousLine = \false;
    /** @var bool */
    public $alwaysSplitAllConditionParts = \false;
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $controlStructurePointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $controlStructurePointer) : void
    {
        if ($this->shouldBeSkipped($phpcsFile, $controlStructurePointer)) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        $parenthesisOpenerPointer = $tokens[$controlStructurePointer]['parenthesis_opener'];
        $parenthesisCloserPointer = $tokens[$controlStructurePointer]['parenthesis_closer'];
        $booleanOperatorPointers = \SlevomatCodingStandard\Helpers\TokenHelper::findNextAll($phpcsFile, \PHP_CodeSniffer\Util\Tokens::$booleanOperators, $parenthesisOpenerPointer + 1, $parenthesisCloserPointer);
        $booleanOperatorPointersCount = \count($booleanOperatorPointers);
        if ($booleanOperatorPointersCount === 0) {
            return;
        }
        $conditionStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $parenthesisOpenerPointer + 1);
        $conditionEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $parenthesisCloserPointer - 1);
        $conditionStartsOnNewLine = $tokens[$parenthesisOpenerPointer]['line'] !== $tokens[$conditionStartPointer]['line'];
        $conditionEndsOnNewLine = $tokens[$parenthesisCloserPointer]['line'] !== $tokens[$conditionEndPointer]['line'];
        $lineStart = $this->getLineStart($phpcsFile, $conditionStartsOnNewLine ? $conditionStartPointer - 1 : $parenthesisOpenerPointer);
        $lineEnd = $this->getLineEnd($phpcsFile, $conditionEndsOnNewLine ? $conditionEndPointer + 1 : $parenthesisCloserPointer);
        $condition = $this->getCondition($phpcsFile, $parenthesisOpenerPointer, $parenthesisCloserPointer);
        $lineLength = \strlen($lineStart . $condition . $lineEnd);
        $conditionLinesCount = $tokens[$conditionEndPointer]['line'] - $tokens[$conditionStartPointer]['line'] + 1;
        if (!$this->shouldReportError($lineLength, $conditionLinesCount, $booleanOperatorPointersCount)) {
            return;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('Condition of "%s" should be splitted to more lines so each condition part is on its own line.', $this->getControlStructureName($phpcsFile, $controlStructurePointer)), $controlStructurePointer, self::CODE_REQUIRED_MULTI_LINE_CONDITION);
        if (!$fix) {
            return;
        }
        $controlStructureIndentation = \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $conditionStartsOnNewLine ? $conditionStartPointer : \SlevomatCodingStandard\Helpers\TokenHelper::findFirstNonWhitespaceOnLine($phpcsFile, $parenthesisOpenerPointer));
        $conditionIndentation = $conditionStartsOnNewLine ? $controlStructureIndentation : \SlevomatCodingStandard\Helpers\IndentationHelper::addIndentation($controlStructureIndentation);
        $innerConditionLevel = 0;
        $phpcsFile->fixer->beginChangeset();
        if (!$conditionStartsOnNewLine) {
            \SlevomatCodingStandard\Helpers\FixerHelper::cleanWhitespaceBefore($phpcsFile, $conditionStartPointer);
            $phpcsFile->fixer->addContentBefore($conditionStartPointer, $phpcsFile->eolChar . $conditionIndentation);
        }
        for ($i = $conditionStartPointer; $i <= $conditionEndPointer; $i++) {
            if ($tokens[$i]['code'] === \T_OPEN_PARENTHESIS) {
                $containsBooleanOperator = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \PHP_CodeSniffer\Util\Tokens::$booleanOperators, $i + 1, $tokens[$i]['parenthesis_closer']) !== null;
                $innerConditionLevel++;
                if ($containsBooleanOperator) {
                    \SlevomatCodingStandard\Helpers\FixerHelper::cleanWhitespaceAfter($phpcsFile, $i);
                    $phpcsFile->fixer->addContent($i, $phpcsFile->eolChar . \SlevomatCodingStandard\Helpers\IndentationHelper::addIndentation($conditionIndentation, $innerConditionLevel));
                    \SlevomatCodingStandard\Helpers\FixerHelper::cleanWhitespaceBefore($phpcsFile, $tokens[$i]['parenthesis_closer']);
                    $phpcsFile->fixer->addContentBefore($tokens[$i]['parenthesis_closer'], $phpcsFile->eolChar . \SlevomatCodingStandard\Helpers\IndentationHelper::addIndentation($conditionIndentation, $innerConditionLevel - 1));
                }
                continue;
            }
            if ($tokens[$i]['code'] === \T_CLOSE_PARENTHESIS) {
                $innerConditionLevel--;
                continue;
            }
            if (!\in_array($tokens[$i]['code'], \PHP_CodeSniffer\Util\Tokens::$booleanOperators, \true)) {
                continue;
            }
            $innerConditionIndentation = $conditionIndentation;
            if ($innerConditionLevel > 0) {
                $innerConditionIndentation = \SlevomatCodingStandard\Helpers\IndentationHelper::addIndentation($innerConditionIndentation, $innerConditionLevel);
            }
            if ($this->booleanOperatorOnPreviousLine) {
                $phpcsFile->fixer->addContent($i, $phpcsFile->eolChar . $innerConditionIndentation);
                \SlevomatCodingStandard\Helpers\FixerHelper::cleanWhitespaceAfter($phpcsFile, $i);
                continue;
            }
            \SlevomatCodingStandard\Helpers\FixerHelper::cleanWhitespaceBefore($phpcsFile, $i);
            $phpcsFile->fixer->addContentBefore($i, $phpcsFile->eolChar . $innerConditionIndentation);
        }
        if (!$conditionEndsOnNewLine) {
            \SlevomatCodingStandard\Helpers\FixerHelper::cleanWhitespaceAfter($phpcsFile, $conditionEndPointer);
            $phpcsFile->fixer->addContent($conditionEndPointer, $phpcsFile->eolChar . $controlStructureIndentation);
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function shouldReportError(int $lineLength, int $conditionLinesCount, int $booleanOperatorPointersCount) : bool
    {
        $minLineLength = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->minLineLength);
        if ($conditionLinesCount === 1) {
            return $minLineLength === 0 || $lineLength >= $minLineLength;
        }
        return $this->alwaysSplitAllConditionParts ? $conditionLinesCount < $booleanOperatorPointersCount + 1 : \false;
    }
}
