<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Classes;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use PHP_CodeSniffer\Util\Tokens;
use SlevomatCodingStandard\Helpers\CommentHelper;
use SlevomatCodingStandard\Helpers\FunctionHelper;
use SlevomatCodingStandard\Helpers\ScopeHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\UseStatementHelper;
use function array_key_exists;
use function array_merge;
use function in_array;
use function sprintf;
use function str_repeat;
use function strlen;
use function substr;
use const T_ABSTRACT;
use const _PhpScopercae980ebf12d\T_ANON_CLASS;
use const T_AS;
use const _PhpScopercae980ebf12d\T_CLOSE_CURLY_BRACKET;
use const T_CONST;
use const T_FINAL;
use const T_FUNCTION;
use const _PhpScopercae980ebf12d\T_OPEN_CURLY_BRACKET;
use const T_PRIVATE;
use const T_PROTECTED;
use const T_PUBLIC;
use const _PhpScopercae980ebf12d\T_SEMICOLON;
use const T_USE;
use const T_VAR;
use const T_VARIABLE;
use const T_WHITESPACE;
class ClassMemberSpacingSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_INCORRECT_COUNT_OF_BLANK_LINES_BETWEEN_MEMBERS = 'IncorrectCountOfBlankLinesBetweenMembers';
    /** @var int */
    public $linesCountBetweenMembers = 1;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        /** @phpstan-var array<int, (int|string)> */
        return \array_merge(\SlevomatCodingStandard\Helpers\TokenHelper::$typeKeywordTokenCodes, [\T_ANON_CLASS]);
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $classPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $classPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $memberPointer = null;
        $previousMemberPointer = null;
        do {
            $previousMemberPointer = $memberPointer;
            $memberPointer = $this->findNextMember($phpcsFile, $classPointer, $previousMemberPointer ?? $tokens[$classPointer]['scope_opener']);
            if ($memberPointer === null) {
                break;
            }
            if ($previousMemberPointer === null) {
                continue;
            }
            if ($tokens[$previousMemberPointer]['code'] === $tokens[$memberPointer]['code']) {
                continue;
            }
            $previousMemberEndPointer = $this->getMemberEndPointer($phpcsFile, $previousMemberPointer);
            $hasCommentWithNewLineAfterPreviousMember = \false;
            $commentPointerAfterPreviousMember = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $previousMemberEndPointer + 1);
            if (\in_array($tokens[$commentPointerAfterPreviousMember]['code'], \SlevomatCodingStandard\Helpers\TokenHelper::$inlineCommentTokenCodes, \true) && ($tokens[$previousMemberEndPointer]['line'] === $tokens[$commentPointerAfterPreviousMember]['line'] || $tokens[$previousMemberEndPointer]['line'] + 1 === $tokens[$commentPointerAfterPreviousMember]['line'])) {
                $previousMemberEndPointer = \SlevomatCodingStandard\Helpers\CommentHelper::getCommentEndPointer($phpcsFile, $commentPointerAfterPreviousMember);
                if (\substr($tokens[$commentPointerAfterPreviousMember]['content'], -\strlen($phpcsFile->eolChar)) === $phpcsFile->eolChar) {
                    $hasCommentWithNewLineAfterPreviousMember = \true;
                }
            }
            $memberStartPointer = $this->getMemberStartPointer($phpcsFile, $memberPointer);
            $actualLinesCount = $tokens[$memberStartPointer]['line'] - $tokens[$previousMemberEndPointer]['line'] - 1;
            $requiredLinesCount = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeInteger($this->linesCountBetweenMembers);
            if ($actualLinesCount === $requiredLinesCount) {
                continue;
            }
            $errorMessage = $requiredLinesCount === 1 ? 'Expected 1 blank line between class members, found %2$d.' : 'Expected %1$d blank lines between class members, found %2$d.';
            $fix = $phpcsFile->addFixableError(\sprintf($errorMessage, $requiredLinesCount, $actualLinesCount), $memberPointer, self::CODE_INCORRECT_COUNT_OF_BLANK_LINES_BETWEEN_MEMBERS);
            if (!$fix) {
                continue;
            }
            $newLines = \str_repeat($phpcsFile->eolChar, $requiredLinesCount + ($hasCommentWithNewLineAfterPreviousMember ? 0 : 1));
            $phpcsFile->fixer->beginChangeset();
            $phpcsFile->fixer->addContent($previousMemberEndPointer, $newLines);
            for ($i = $previousMemberEndPointer + 1; $i < \SlevomatCodingStandard\Helpers\TokenHelper::findFirstTokenOnLine($phpcsFile, $memberStartPointer); $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
            $phpcsFile->fixer->endChangeset();
        } while (\true);
    }
    private function findNextMember(\PHP_CodeSniffer\Files\File $phpcsFile, int $classPointer, int $previousMemberPointer) : ?int
    {
        $tokens = $phpcsFile->getTokens();
        $memberPointer = $previousMemberPointer;
        do {
            $memberPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_USE, \T_CONST, \T_VAR, \T_PUBLIC, \T_PROTECTED, \T_PRIVATE, \T_FUNCTION], $memberPointer + 1, $tokens[$classPointer]['scope_closer']);
            if ($memberPointer === null) {
                return null;
            }
            if ($tokens[$memberPointer]['code'] === \T_USE) {
                if (!\SlevomatCodingStandard\Helpers\UseStatementHelper::isTraitUse($phpcsFile, $memberPointer)) {
                    continue;
                }
            } elseif (\in_array($tokens[$memberPointer]['code'], [\T_VAR, \T_PUBLIC, \T_PROTECTED, \T_PRIVATE], \true)) {
                $asPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $memberPointer - 1);
                if ($tokens[$asPointer]['code'] === \T_AS) {
                    continue;
                }
                $propertyPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_VARIABLE, \T_FUNCTION, \T_CONST], $memberPointer + 1);
                if ($propertyPointer === null || $tokens[$propertyPointer]['code'] !== \T_VARIABLE) {
                    continue;
                }
                $memberPointer = $propertyPointer;
            }
            if (\SlevomatCodingStandard\Helpers\ScopeHelper::isInSameScope($phpcsFile, $memberPointer, $previousMemberPointer)) {
                break;
            }
        } while (\true);
        return $memberPointer;
    }
    private function getMemberStartPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $memberPointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        $memberFirstCodePointer = $this->getMemberFirstCodePointer($phpcsFile, $memberPointer);
        $pointerBefore = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $memberFirstCodePointer - 1);
        if (\in_array($tokens[$pointerBefore]['code'], \PHP_CodeSniffer\Util\Tokens::$commentTokens, \true) && $tokens[$pointerBefore]['line'] + 1 === $tokens[$memberFirstCodePointer]['line']) {
            $pointerBeforeComment = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $pointerBefore - 1);
            if ($tokens[$pointerBeforeComment]['line'] !== $tokens[$pointerBefore]['line']) {
                return \array_key_exists('comment_opener', $tokens[$pointerBefore]) ? $tokens[$pointerBefore]['comment_opener'] : \SlevomatCodingStandard\Helpers\CommentHelper::getMultilineCommentStartPointer($phpcsFile, $pointerBefore);
            }
        }
        return $memberFirstCodePointer;
    }
    private function getMemberFirstCodePointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $memberPointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$memberPointer]['code'] === \T_USE) {
            return $memberPointer;
        }
        $firstCodePointer = $memberPointer;
        $previousFirstCodePointer = $memberPointer;
        do {
            /** @var int $firstCodePointer */
            $firstCodePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, [\T_VAR, \T_PUBLIC, \T_PROTECTED, \T_PRIVATE, \T_ABSTRACT, \T_FINAL, \T_SEMICOLON, \T_CLOSE_CURLY_BRACKET], $firstCodePointer - 1);
            if (\in_array($tokens[$firstCodePointer]['code'], [\T_SEMICOLON, \T_CLOSE_CURLY_BRACKET], \true)) {
                break;
            }
            $previousFirstCodePointer = $firstCodePointer;
        } while (\true);
        return $previousFirstCodePointer;
    }
    private function getMemberEndPointer(\PHP_CodeSniffer\Files\File $phpcsFile, int $memberPointer) : int
    {
        $tokens = $phpcsFile->getTokens();
        if ($tokens[$memberPointer]['code'] === \T_USE) {
            $pointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextLocal($phpcsFile, [\T_SEMICOLON, \T_OPEN_CURLY_BRACKET], $memberPointer + 1);
            return $tokens[$pointer]['code'] === \T_OPEN_CURLY_BRACKET ? $tokens[$pointer]['bracket_closer'] : $pointer;
        }
        if ($tokens[$memberPointer]['code'] === \T_FUNCTION && !\SlevomatCodingStandard\Helpers\FunctionHelper::isAbstract($phpcsFile, $memberPointer)) {
            return $tokens[$memberPointer]['scope_closer'];
        }
        return \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_SEMICOLON, $memberPointer + 1);
    }
}
