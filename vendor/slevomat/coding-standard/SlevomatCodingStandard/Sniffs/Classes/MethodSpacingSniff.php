<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Classes;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\ClassHelper;
use SlevomatCodingStandard\Helpers\DocCommentHelper;
use SlevomatCodingStandard\Helpers\FunctionHelper;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_key_exists;
use function sprintf;
use function str_repeat;
use const T_FUNCTION;
use const _PhpScoperfa521053d812\T_SEMICOLON;
use const T_WHITESPACE;
class MethodSpacingSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_INCORRECT_LINES_COUNT_BETWEEN_METHODS = 'IncorrectLinesCountBetweenMethods';
    /** @var int */
    public $minLinesCount = 1;
    /** @var int */
    public $maxLinesCount = 1;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_FUNCTION];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $methodPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $methodPointer) : void
    {
        if (!\SlevomatCodingStandard\Helpers\FunctionHelper::isMethod($phpcsFile, $methodPointer)) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        $methodEndPointer = \array_key_exists('scope_closer', $tokens[$methodPointer]) ? $tokens[$methodPointer]['scope_closer'] : \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $methodPointer + 1);
        $classPointer = \SlevomatCodingStandard\Helpers\ClassHelper::getClassPointer($phpcsFile, $methodPointer);
        $nextMethodPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_FUNCTION, $methodEndPointer + 1, $tokens[$classPointer]['scope_closer']);
        if ($nextMethodPointer === null) {
            return;
        }
        $nextMethodDocCommentStartPointer = \SlevomatCodingStandard\Helpers\DocCommentHelper::findDocCommentOpenToken($phpcsFile, $nextMethodPointer);
        if ($nextMethodDocCommentStartPointer !== null && $tokens[$tokens[$nextMethodDocCommentStartPointer]['comment_closer']]['line'] + 1 !== $tokens[$nextMethodPointer]['line']) {
            $nextMethodDocCommentStartPointer = null;
        }
        $nextMethodFirstLinePointer = $tokens[$nextMethodPointer]['line'] === $tokens[$methodEndPointer]['line'] ? \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $methodEndPointer + 1) : \SlevomatCodingStandard\Helpers\TokenHelper::findFirstTokenOnLine($phpcsFile, $nextMethodDocCommentStartPointer ?? $nextMethodPointer);
        if (\SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $methodEndPointer + 1, $nextMethodFirstLinePointer) !== null) {
            return;
        }
        $linesBetween = $tokens[$nextMethodFirstLinePointer]['line'] !== $tokens[$methodEndPointer]['line'] ? $tokens[$nextMethodFirstLinePointer]['line'] - $tokens[$methodEndPointer]['line'] - 1 : null;
        $minExpectedLines = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->minLinesCount);
        $maxExpectedLines = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->maxLinesCount);
        if ($linesBetween !== null && $linesBetween >= $minExpectedLines && $linesBetween <= $maxExpectedLines) {
            return;
        }
        if ($minExpectedLines === $maxExpectedLines) {
            $errorMessage = $minExpectedLines === 1 ? 'Expected 1 blank line after method, found %3$d.' : 'Expected %2$d blank lines after method, found %3$d.';
        } else {
            $errorMessage = 'Expected %1$d to %2$d blank lines after method, found %3$d.';
        }
        $fix = $phpcsFile->addFixableError(\sprintf($errorMessage, $minExpectedLines, $maxExpectedLines, $linesBetween ?? 0), $methodPointer, self::CODE_INCORRECT_LINES_COUNT_BETWEEN_METHODS);
        if (!$fix) {
            return;
        }
        $phpcsFile->fixer->beginChangeset();
        if ($linesBetween === null) {
            $phpcsFile->fixer->addContent($methodEndPointer, $phpcsFile->eolChar . \str_repeat($phpcsFile->eolChar, $minExpectedLines) . \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, \SlevomatCodingStandard\Helpers\TokenHelper::findFirstNonWhitespaceOnLine($phpcsFile, $methodPointer)));
            for ($i = $methodEndPointer + 1; $i < $nextMethodFirstLinePointer; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
        } elseif ($linesBetween > $maxExpectedLines) {
            $phpcsFile->fixer->addContent($methodEndPointer, \str_repeat($phpcsFile->eolChar, $maxExpectedLines + 1));
            for ($i = $methodEndPointer + 1; $i < \SlevomatCodingStandard\Helpers\TokenHelper::findFirstTokenOnLine($phpcsFile, $nextMethodFirstLinePointer); $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
        } else {
            $phpcsFile->fixer->addContent($methodEndPointer, \str_repeat($phpcsFile->eolChar, $minExpectedLines - $linesBetween));
        }
        $phpcsFile->fixer->endChangeset();
    }
}
