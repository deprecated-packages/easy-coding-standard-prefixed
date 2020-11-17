<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\CommentHelper;
use SlevomatCodingStandard\Helpers\IndentationHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_key_exists;
use function array_merge;
use function in_array;
use function strlen;
use function substr;
use const _PhpScoper2a8ad010dfbd\T_CLOSE_CURLY_BRACKET;
use const _PhpScoper2a8ad010dfbd\T_CLOSURE;
use const _PhpScoper2a8ad010dfbd\T_DOC_COMMENT_OPEN_TAG;
use const T_ELSE;
use const T_ELSEIF;
use const _PhpScoper2a8ad010dfbd\T_OPEN_CURLY_BRACKET;
use const T_WHITESPACE;
class DisallowCommentAfterCodeSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_DISALLOWED_COMMENT_AFTER_CODE = 'DisallowedCommentAfterCode';
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        /** @phpstan-var array<int, (int|string)> */
        return \array_merge(\SlevomatCodingStandard\Helpers\TokenHelper::$inlineCommentTokenCodes, [\T_DOC_COMMENT_OPEN_TAG]);
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $commentPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $commentPointer) : void
    {
        $firstNonWhitespacePointerOnLine = \SlevomatCodingStandard\Helpers\TokenHelper::findFirstNonWhitespaceOnLine($phpcsFile, $commentPointer);
        if ($firstNonWhitespacePointerOnLine === $commentPointer) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        $commentEndPointer = \SlevomatCodingStandard\Helpers\CommentHelper::getCommentEndPointer($phpcsFile, $commentPointer);
        $nextNonWhitespacePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, \T_WHITESPACE, $commentEndPointer + 1);
        if ($nextNonWhitespacePointer !== null && $commentEndPointer !== null && $tokens[$nextNonWhitespacePointer]['line'] === $tokens[$commentEndPointer]['line']) {
            return;
        }
        $fix = $phpcsFile->addFixableError('Comment after code is disallowed.', $commentPointer, self::CODE_DISALLOWED_COMMENT_AFTER_CODE);
        if (!$fix) {
            return;
        }
        $commentContent = \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $commentPointer, $commentEndPointer);
        $commentHasNewLineAtTheEnd = \substr($commentContent, -\strlen($phpcsFile->eolChar)) === $phpcsFile->eolChar;
        if (!$commentHasNewLineAtTheEnd) {
            $commentContent .= $phpcsFile->eolChar;
        }
        $firstNonWhiteSpacePointerBeforeComment = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, \T_WHITESPACE, $commentPointer - 1);
        $newLineAfterComment = $commentHasNewLineAtTheEnd ? $commentEndPointer : \SlevomatCodingStandard\Helpers\TokenHelper::findNextContent($phpcsFile, \T_WHITESPACE, $phpcsFile->eolChar, $commentEndPointer + 1);
        $indentation = \SlevomatCodingStandard\Helpers\IndentationHelper::getIndentation($phpcsFile, $firstNonWhitespacePointerOnLine);
        $firstPointerOnLine = \SlevomatCodingStandard\Helpers\TokenHelper::findFirstTokenOnLine($phpcsFile, $firstNonWhitespacePointerOnLine);
        $phpcsFile->fixer->beginChangeset();
        if ($tokens[$firstNonWhiteSpacePointerBeforeComment]['code'] === \T_OPEN_CURLY_BRACKET && \array_key_exists('scope_condition', $tokens[$firstNonWhiteSpacePointerBeforeComment]) && \in_array($tokens[$tokens[$firstNonWhiteSpacePointerBeforeComment]['scope_condition']]['code'], [\T_ELSEIF, \T_ELSE, \T_CLOSURE], \true)) {
            $phpcsFile->fixer->addContent($firstNonWhiteSpacePointerBeforeComment, $phpcsFile->eolChar . \SlevomatCodingStandard\Helpers\IndentationHelper::addIndentation($indentation) . $commentContent);
        } elseif ($tokens[$firstNonWhitespacePointerOnLine]['code'] === \T_CLOSE_CURLY_BRACKET) {
            $phpcsFile->fixer->addContent($firstNonWhiteSpacePointerBeforeComment, $phpcsFile->eolChar . $indentation . $commentContent);
        } else {
            $phpcsFile->fixer->addContentBefore($firstPointerOnLine, $indentation . $commentContent);
            $phpcsFile->fixer->addNewline($firstNonWhiteSpacePointerBeforeComment);
        }
        for ($i = $firstNonWhiteSpacePointerBeforeComment + 1; $i <= $newLineAfterComment; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
}
