<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\ControlStructures;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_merge;
use function in_array;
use function strlen;
use function substr;
use const _PhpScopera238de2e9b5a\T_CLOSE_PARENTHESIS;
use const _PhpScopera238de2e9b5a\T_CLOSE_SHORT_ARRAY;
use const _PhpScopera238de2e9b5a\T_CLOSE_SQUARE_BRACKET;
use const T_CLOSE_TAG;
use const T_COALESCE;
use const _PhpScopera238de2e9b5a\T_COMMA;
use const T_DOUBLE_ARROW;
use const _PhpScopera238de2e9b5a\T_INLINE_ELSE;
use const _PhpScopera238de2e9b5a\T_INLINE_THEN;
use const T_OPEN_TAG;
use const T_OPEN_TAG_WITH_ECHO;
use const _PhpScopera238de2e9b5a\T_SEMICOLON;
use const T_WHITESPACE;
class RequireMultiLineTernaryOperatorSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_MULTI_LINE_TERNARY_OPERATOR_NOT_USED = 'MultiLineTernaryOperatorNotUsed';
    private const TAB_INDENT = "\t";
    private const SPACES_INDENT = '    ';
    /** @var int */
    public $lineLengthLimit = 0;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_INLINE_THEN];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $inlineThenPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $inlineThenPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $inlineThenPointer + 1);
        if ($tokens[$nextPointer]['code'] === \T_INLINE_ELSE) {
            return;
        }
        /** @var int $inlineElsePointer */
        $inlineElsePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_INLINE_ELSE, $inlineThenPointer + 1);
        if ($tokens[$inlineThenPointer]['line'] !== $tokens[$inlineElsePointer]['line']) {
            return;
        }
        $pointerAfterInlineElseEnd = $inlineElsePointer + 1;
        while (\true) {
            if (\in_array($tokens[$pointerAfterInlineElseEnd]['code'], [\T_CLOSE_TAG, \T_SEMICOLON, \T_COMMA, \T_DOUBLE_ARROW, \T_CLOSE_SHORT_ARRAY, \T_COALESCE], \true)) {
                break;
            }
            if ($tokens[$pointerAfterInlineElseEnd]['code'] === \T_CLOSE_PARENTHESIS && $tokens[$pointerAfterInlineElseEnd]['parenthesis_opener'] < $inlineElsePointer) {
                break;
            }
            if ($tokens[$pointerAfterInlineElseEnd]['code'] === \T_CLOSE_SQUARE_BRACKET && $tokens[$pointerAfterInlineElseEnd]['bracket_opener'] < $inlineElsePointer) {
                break;
            }
            $pointerAfterInlineElseEnd++;
        }
        if ($tokens[$pointerAfterInlineElseEnd]['code'] !== \T_SEMICOLON) {
            return;
        }
        $endOfLineBeforeInlineThenPointer = $this->getEndOfLineBefore($phpcsFile, $inlineThenPointer);
        $lineLengthLimit = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->lineLengthLimit);
        $actualLineLength = \strlen(\SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $endOfLineBeforeInlineThenPointer + 1, $pointerAfterInlineElseEnd));
        if ($actualLineLength <= $lineLengthLimit) {
            return;
        }
        $fix = $phpcsFile->addFixableError('Ternary operator should be reformatted to more lines.', $inlineThenPointer, self::CODE_MULTI_LINE_TERNARY_OPERATOR_NOT_USED);
        if (!$fix) {
            return;
        }
        $indentation = $this->getIndentation($phpcsFile, $endOfLineBeforeInlineThenPointer);
        $pointerBeforeInlineThen = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $inlineThenPointer - 1);
        $pointerBeforeInlineElse = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $inlineElsePointer - 1);
        $phpcsFile->fixer->beginChangeset();
        for ($i = $pointerBeforeInlineThen + 1; $i < $inlineThenPointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->addContentBefore($inlineThenPointer, $phpcsFile->eolChar . $indentation);
        for ($i = $pointerBeforeInlineElse + 1; $i < $inlineElsePointer; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->addContentBefore($inlineElsePointer, $phpcsFile->eolChar . $indentation);
        $phpcsFile->fixer->endChangeset();
    }
    private function getEndOfLineBefore(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        $endOfLineBefore = null;
        $startPointer = $pointer - 1;
        while (\true) {
            $possibleEndOfLinePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \array_merge([\T_WHITESPACE, \T_OPEN_TAG, \T_OPEN_TAG_WITH_ECHO], \SlevomatCodingStandard\Helpers\TokenHelper::$inlineCommentTokenCodes), $startPointer);
            if ($tokens[$possibleEndOfLinePointer]['code'] === \T_WHITESPACE && $tokens[$possibleEndOfLinePointer]['content'] === $phpcsFile->eolChar) {
                $endOfLineBefore = $possibleEndOfLinePointer;
                break;
            }
            if ($tokens[$possibleEndOfLinePointer]['code'] === \T_OPEN_TAG || $tokens[$possibleEndOfLinePointer]['code'] === \T_OPEN_TAG_WITH_ECHO) {
                $endOfLineBefore = $possibleEndOfLinePointer;
                break;
            }
            if (\in_array($tokens[$possibleEndOfLinePointer]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$inlineCommentTokenCodes, \true) && \substr($tokens[$possibleEndOfLinePointer]['content'], -1) === $phpcsFile->eolChar) {
                $endOfLineBefore = $possibleEndOfLinePointer;
                break;
            }
            $startPointer = $possibleEndOfLinePointer - 1;
        }
        /** @var int $endOfLineBefore */
        $endOfLineBefore = $endOfLineBefore;
        return $endOfLineBefore;
    }
    private function getIndentation(\PHP_CodeSniffer\Files\File $phpcsFile, int $endOfLinePointer) : string
    {
        $pointerAfterWhitespace = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $endOfLinePointer + 1);
        $actualIndentation = \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $endOfLinePointer + 1, $pointerAfterWhitespace - 1);
        if (\strlen($actualIndentation) !== 0) {
            return $actualIndentation . (\substr($actualIndentation, -1) === self::TAB_INDENT ? self::TAB_INDENT : self::SPACES_INDENT);
        }
        $tabPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousContent($phpcsFile, \T_WHITESPACE, self::TAB_INDENT, $endOfLinePointer - 1);
        return $tabPointer !== null ? self::TAB_INDENT : self::SPACES_INDENT;
    }
}
