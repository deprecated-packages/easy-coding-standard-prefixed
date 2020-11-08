<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\DocCommentHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function rtrim;
use const _PhpScoper190659c42b56\T_DOC_COMMENT_CLOSE_TAG;
use const _PhpScoper190659c42b56\T_DOC_COMMENT_OPEN_TAG;
use const _PhpScoper190659c42b56\T_DOC_COMMENT_STAR;
use const _PhpScoper190659c42b56\T_DOC_COMMENT_WHITESPACE;
/**
 * @internal
 */
abstract class AbstractRequireOneLineDocComment implements \PHP_CodeSniffer\Sniffs\Sniff
{
    protected abstract function addError(\PHP_CodeSniffer\Files\File $phpcsFile, int $docCommentStartPointer) : bool;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_DOC_COMMENT_OPEN_TAG];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $docCommentStartPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $docCommentStartPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        // Only validate properties without description
        if (\SlevomatCodingStandard\Helpers\DocCommentHelper::hasDocCommentDescription($phpcsFile, $docCommentStartPointer)) {
            return;
        }
        $docCommentEndPointer = $tokens[$docCommentStartPointer]['comment_closer'];
        $lineDifference = $tokens[$docCommentEndPointer]['line'] - $tokens[$docCommentStartPointer]['line'];
        // Already one-line
        if ($lineDifference === 0) {
            return;
        }
        // Ignore empty lines
        $currentLinePointer = $docCommentStartPointer;
        do {
            $currentLinePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findFirstTokenOnNextLine($phpcsFile, $currentLinePointer);
            if ($currentLinePointer === null || $currentLinePointer >= $docCommentEndPointer) {
                break;
            }
            $types = [\T_DOC_COMMENT_STAR, \T_DOC_COMMENT_CLOSE_TAG];
            $startingPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, $types, $currentLinePointer, $docCommentEndPointer);
            if ($startingPointer === null || $tokens[$startingPointer]['code'] === \T_DOC_COMMENT_CLOSE_TAG) {
                break;
            }
            $nextEffectivePointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, [\T_DOC_COMMENT_WHITESPACE], $startingPointer + 1, $docCommentEndPointer + 1);
            if ($tokens[$currentLinePointer]['line'] === $tokens[$nextEffectivePointer]['line']) {
                continue;
            }
            $lineDifference--;
        } while (\true);
        // Looks like a compound doc-comment
        if ($lineDifference > 2) {
            return;
        }
        $fix = $this->addError($phpcsFile, $docCommentStartPointer);
        if (!$fix) {
            return;
        }
        $contentStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNextExcluding($phpcsFile, [\T_DOC_COMMENT_WHITESPACE, \T_DOC_COMMENT_STAR], $docCommentStartPointer + 1, $docCommentEndPointer);
        $contentEndPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, [\T_DOC_COMMENT_WHITESPACE, \T_DOC_COMMENT_STAR], $docCommentEndPointer - 1, $docCommentStartPointer);
        if ($contentStartPointer === null) {
            for ($i = $docCommentStartPointer + 1; $i < $docCommentEndPointer; $i++) {
                $phpcsFile->fixer->replaceToken($i, '');
            }
            return;
        }
        $phpcsFile->fixer->beginChangeset();
        for ($i = $docCommentStartPointer + 1; $i < $docCommentEndPointer; $i++) {
            if ($i >= $contentStartPointer && $i <= $contentEndPointer) {
                if ($i === $contentEndPointer) {
                    $phpcsFile->fixer->replaceToken($i, \rtrim($phpcsFile->fixer->getTokenContent($i), ' '));
                }
                continue;
            }
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->addContentBefore($contentStartPointer, ' ');
        $phpcsFile->fixer->addContentBefore($docCommentEndPointer, ' ');
        $phpcsFile->fixer->endChangeset();
    }
}
