<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\Annotation\GenericAnnotation;
use SlevomatCodingStandard\Helpers\AnnotationHelper;
use function count;
use const _PhpScoper4936962185e7\T_DOC_COMMENT_OPEN_TAG;
class DeprecatedAnnotationDeclarationSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const MISSING_DESCRIPTION = 'MissingDescription';
    /** @return array<int, (int|string)> */
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
        /** @var GenericAnnotation[] $annotations */
        $annotations = \SlevomatCodingStandard\Helpers\AnnotationHelper::getAnnotationsByName($phpcsFile, $docCommentStartPointer, '@deprecated');
        if (\count($annotations) === 0) {
            return;
        }
        foreach ($annotations as $annotation) {
            if ($annotation->getContent() !== null) {
                continue;
            }
            $phpcsFile->addError('Deprecated annotation must have a description.', $annotation->getStartPointer(), self::MISSING_DESCRIPTION);
        }
    }
}
