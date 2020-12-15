<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\AnnotationHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function in_array;
use function sprintf;
use function trim;
use const _PhpScoperdeea1786e972\T_DOC_COMMENT_CLOSE_TAG;
use const _PhpScoperdeea1786e972\T_DOC_COMMENT_OPEN_TAG;
use const _PhpScoperdeea1786e972\T_DOC_COMMENT_STAR;
use const _PhpScoperdeea1786e972\T_DOC_COMMENT_TAG;
use const _PhpScoperdeea1786e972\T_DOC_COMMENT_WHITESPACE;
class ForbiddenAnnotationsSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_ANNOTATION_FORBIDDEN = 'AnnotationForbidden';
    /** @var string[] */
    public $forbiddenAnnotations = [];
    /** @var string[]|null */
    private $normalizedForbiddenAnnotations;
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
     * @param int $docCommentOpenPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $docCommentOpenPointer) : void
    {
        $tokens = $phpcsFile->getTokens();
        $annotations = \SlevomatCodingStandard\Helpers\AnnotationHelper::getAnnotations($phpcsFile, $docCommentOpenPointer);
        foreach ($annotations as $annotationName => $annotationsByName) {
            if (!\in_array($annotationName, $this->getNormalizedForbiddenAnnotations(), \true)) {
                continue;
            }
            foreach ($annotationsByName as $annotation) {
                $fix = $phpcsFile->addFixableError(\sprintf('Use of annotation %s is forbidden.', $annotationName), $annotation->getStartPointer(), self::CODE_ANNOTATION_FORBIDDEN);
                if (!$fix) {
                    continue;
                }
                $starPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_DOC_COMMENT_STAR, $annotation->getStartPointer() - 1, $docCommentOpenPointer);
                $annotationStartPointer = $starPointer ?? $docCommentOpenPointer + 1;
                /** @var int $nextPointer */
                $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_DOC_COMMENT_TAG, \T_DOC_COMMENT_CLOSE_TAG], $annotation->getEndPointer() + 1);
                if ($tokens[$nextPointer]['code'] === \T_DOC_COMMENT_TAG) {
                    $nextPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_DOC_COMMENT_STAR, $nextPointer - 1);
                }
                $annotationEndPointer = $nextPointer - 1;
                if ($tokens[$nextPointer]['code'] === \T_DOC_COMMENT_CLOSE_TAG && $starPointer !== null) {
                    $pointerBeforeWhitespace = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousExcluding($phpcsFile, [\T_DOC_COMMENT_WHITESPACE, \T_DOC_COMMENT_STAR], $annotationStartPointer - 1);
                    /** @var int $annotationStartPointer */
                    $annotationStartPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, \T_DOC_COMMENT_STAR, $pointerBeforeWhitespace + 1);
                }
                $phpcsFile->fixer->beginChangeset();
                for ($i = $annotationStartPointer; $i <= $annotationEndPointer; $i++) {
                    $phpcsFile->fixer->replaceToken($i, '');
                }
                $docCommentUseful = \false;
                $docCommentClosePointer = $tokens[$docCommentOpenPointer]['comment_closer'];
                for ($i = $docCommentOpenPointer + 1; $i < $docCommentClosePointer; $i++) {
                    $tokenContent = \trim($phpcsFile->fixer->getTokenContent($i));
                    if ($tokenContent === '' || $tokenContent === '*') {
                        continue;
                    }
                    $docCommentUseful = \true;
                    break;
                }
                if (!$docCommentUseful) {
                    /** @var int $nextPointerAfterDocComment */
                    $nextPointerAfterDocComment = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $docCommentClosePointer + 1);
                    for ($i = $docCommentOpenPointer; $i < $nextPointerAfterDocComment; $i++) {
                        $phpcsFile->fixer->replaceToken($i, '');
                    }
                }
                $phpcsFile->fixer->endChangeset();
            }
        }
    }
    /**
     * @return string[]
     */
    private function getNormalizedForbiddenAnnotations() : array
    {
        if ($this->normalizedForbiddenAnnotations === null) {
            $this->normalizedForbiddenAnnotations = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeArray($this->forbiddenAnnotations);
        }
        return $this->normalizedForbiddenAnnotations;
    }
}
