<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Classes;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\ClassHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function count;
use function in_array;
use function sprintf;
use function substr_count;
use const _PhpScopera23ebff5477f\T_ANON_CLASS;
use const T_CLASS;
use const _PhpScopera23ebff5477f\T_CLOSE_CURLY_BRACKET;
use const _PhpScopera23ebff5477f\T_OPEN_CURLY_BRACKET;
use const _PhpScopera23ebff5477f\T_SEMICOLON;
use const T_TRAIT;
use const T_WHITESPACE;
class TraitUseSpacingSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_INCORRECT_LINES_COUNT_BEFORE_FIRST_USE = 'IncorrectLinesCountBeforeFirstUse';
    public const CODE_INCORRECT_LINES_COUNT_BETWEEN_USES = 'IncorrectLinesCountBetweenUses';
    public const CODE_INCORRECT_LINES_COUNT_AFTER_LAST_USE = 'IncorrectLinesCountAfterLastUse';
    /** @var int */
    public $linesCountBeforeFirstUse = 1;
    /** @var int */
    public $linesCountBeforeFirstUseWhenFirstInClass = null;
    /** @var int */
    public $linesCountBetweenUses = 0;
    /** @var int */
    public $linesCountAfterLastUse = 1;
    /** @var int */
    public $linesCountAfterLastUseWhenLastInClass = 1;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_CLASS, \T_ANON_CLASS, \T_TRAIT];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $classPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $classPointer) : void
    {
        $usePointers = \SlevomatCodingStandard\Helpers\ClassHelper::getTraitUsePointers($phpcsFile, $classPointer);
        if (\count($usePointers) === 0) {
            return;
        }
        $this->checkLinesBeforeFirstUse($phpcsFile, $usePointers[0]);
        $this->checkLinesAfterLastUse($phpcsFile, $usePointers[\count($usePointers) - 1]);
        $this->checkLinesBetweenUses($phpcsFile, $usePointers);
    }
    private function checkLinesBeforeFirstUse(\PHP_CodeSniffer\Files\File $phpcsFile, int $firstUsePointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $useStartPointer = $firstUsePointer;
        /** @var int $pointerBeforeFirstUse */
        $pointerBeforeFirstUse = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $firstUsePointer - 1);
        if (\in_array($tokens[$pointerBeforeFirstUse]['code'], \PHP_CodeSniffer\Util\Tokens::$commentTokens, \true)) {
            $pointerBeforeFirstUse = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $pointerBeforeFirstUse - 1);
            $useStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \PHP_CodeSniffer\Util\Tokens::$commentTokens, $pointerBeforeFirstUse + 1);
        }
        $isAtTheStartOfClass = $tokens[$pointerBeforeFirstUse]['code'] === \T_OPEN_CURLY_BRACKET;
        $whitespaceBeforeFirstUse = '';
        if ($pointerBeforeFirstUse + 1 !== $firstUsePointer) {
            $whitespaceBeforeFirstUse .= \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $pointerBeforeFirstUse + 1, $useStartPointer - 1);
        }
        $requiredLinesCountBeforeFirstUse = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBeforeFirstUse);
        if ($isAtTheStartOfClass && $this->linesCountBeforeFirstUseWhenFirstInClass !== null) {
            $requiredLinesCountBeforeFirstUse = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBeforeFirstUseWhenFirstInClass);
        }
        $actualLinesCountBeforeFirstUse = \substr_count($whitespaceBeforeFirstUse, $phpcsFile->eolChar) - 1;
        if ($actualLinesCountBeforeFirstUse === $requiredLinesCountBeforeFirstUse) {
            return;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('Expected %d lines before first use statement, found %d.', $requiredLinesCountBeforeFirstUse, $actualLinesCountBeforeFirstUse), $firstUsePointer, self::CODE_INCORRECT_LINES_COUNT_BEFORE_FIRST_USE);
        if (!$fix) {
            return;
        }
        $pointerBeforeIndentation = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousContent($phpcsFile, \T_WHITESPACE, $phpcsFile->eolChar, $firstUsePointer, $pointerBeforeFirstUse);
        $phpcsFile->fixer->beginChangeset();
        if ($pointerBeforeIndentation !== null) {
            for ($i = $pointerBeforeFirstUse + 1; $i <= $pointerBeforeIndentation; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
        }
        for ($i = 0; $i <= $requiredLinesCountBeforeFirstUse; $i++) {
            $phpcsFile->fixer->addNewline($pointerBeforeFirstUse);
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function checkLinesAfterLastUse(\PHP_CodeSniffer\Files\File $phpcsFile, int $lastUsePointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        /** @var int $lastUseEndPointer */
        $lastUseEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextLocal($phpcsFile, [\T_SEMICOLON, \T_OPEN_CURLY_BRACKET], $lastUsePointer + 1);
        if ($tokens[$lastUseEndPointer]['code'] === \T_OPEN_CURLY_BRACKET) {
            $lastUseEndPointer = $tokens[$lastUseEndPointer]['bracket_closer'];
        }
        $pointerAfterLastUse = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $lastUseEndPointer + 1);
        $isAtTheEndOfClass = $tokens[$pointerAfterLastUse]['code'] === \T_CLOSE_CURLY_BRACKET;
        $whitespaceEnd = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $lastUseEndPointer + 1) - 1;
        if ($lastUseEndPointer !== $whitespaceEnd && $tokens[$whitespaceEnd]['content'] !== $phpcsFile->eolChar) {
            $lastEolPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousContent($phpcsFile, \T_WHITESPACE, $phpcsFile->eolChar, $whitespaceEnd - 1, $lastUseEndPointer);
            $whitespaceEnd = $lastEolPointer ?? $lastUseEndPointer;
        }
        $whitespaceAfterLastUse = \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $lastUseEndPointer + 1, $whitespaceEnd);
        $requiredLinesCountAfterLastUse = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($isAtTheEndOfClass ? $this->linesCountAfterLastUseWhenLastInClass : $this->linesCountAfterLastUse);
        $actualLinesCountAfterLastUse = \substr_count($whitespaceAfterLastUse, $phpcsFile->eolChar) - 1;
        if ($actualLinesCountAfterLastUse === $requiredLinesCountAfterLastUse) {
            return;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('Expected %d lines after last use statement, found %d.', $requiredLinesCountAfterLastUse, $actualLinesCountAfterLastUse), $lastUsePointer, self::CODE_INCORRECT_LINES_COUNT_AFTER_LAST_USE);
        if (!$fix) {
            return;
        }
        $phpcsFile->fixer->beginChangeset();
        for ($i = $lastUseEndPointer + 1; $i <= $whitespaceEnd; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        for ($i = 0; $i <= $requiredLinesCountAfterLastUse; $i++) {
            $phpcsFile->fixer->addNewline($lastUseEndPointer);
        }
        $phpcsFile->fixer->endChangeset();
    }
    /**
     * @param File $phpcsFile
     * @param int[] $usePointers
     */
    private function checkLinesBetweenUses(\PHP_CodeSniffer\Files\File $phpcsFile, array $usePointers) : void
    {
        if (\count($usePointers) === 1) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        $requiredLinesCountBetweenUses = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBetweenUses);
        $previousUsePointer = null;
        foreach ($usePointers as $usePointer) {
            if ($previousUsePointer === null) {
                $previousUsePointer = $usePointer;
                continue;
            }
            /** @var int $previousUseEndPointer */
            $previousUseEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextLocal($phpcsFile, [\T_SEMICOLON, \T_OPEN_CURLY_BRACKET], $previousUsePointer + 1);
            if ($tokens[$previousUseEndPointer]['code'] === \T_OPEN_CURLY_BRACKET) {
                /** @var int $previousUseEndPointer */
                $previousUseEndPointer = $tokens[$previousUseEndPointer]['bracket_closer'];
            }
            $useStartPointer = $usePointer;
            $pointerBeforeUse = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $usePointer - 1);
            if (\in_array($tokens[$pointerBeforeUse]['code'], \PHP_CodeSniffer\Util\Tokens::$commentTokens, \true)) {
                $useStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \PHP_CodeSniffer\Util\Tokens::$commentTokens, \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $pointerBeforeUse - 1) + 1);
            }
            $actualLinesCountAfterPreviousUse = $tokens[$useStartPointer]['line'] - $tokens[$previousUseEndPointer]['line'] - 1;
            if ($actualLinesCountAfterPreviousUse === $requiredLinesCountBetweenUses) {
                $previousUsePointer = $usePointer;
                continue;
            }
            $errorParameters = [\sprintf('Expected %d lines between same types of use statement, found %d.', $requiredLinesCountBetweenUses, $actualLinesCountAfterPreviousUse), $usePointer, self::CODE_INCORRECT_LINES_COUNT_BETWEEN_USES];
            $pointerBeforeUse = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $usePointer - 1);
            if ($previousUseEndPointer !== $pointerBeforeUse) {
                $phpcsFile->addError(...$errorParameters);
                $previousUsePointer = $usePointer;
                continue;
            }
            $fix = $phpcsFile->addFixableError(...$errorParameters);
            if (!$fix) {
                $previousUsePointer = $usePointer;
                continue;
            }
            $pointerBeforeIndentation = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousContent($phpcsFile, \T_WHITESPACE, $phpcsFile->eolChar, $usePointer, $previousUseEndPointer);
            $phpcsFile->fixer->beginChangeset();
            if ($pointerBeforeIndentation !== null) {
                for ($i = $previousUseEndPointer + 1; $i <= $pointerBeforeIndentation; $i++) {
                    $phpcsFile->fixer->replaceToken($i, '');
                }
            }
            for ($i = 0; $i <= $requiredLinesCountBetweenUses; $i++) {
                $phpcsFile->fixer->addNewline($previousUseEndPointer);
            }
            $phpcsFile->fixer->endChangeset();
            $previousUsePointer = $usePointer;
        }
    }
}
