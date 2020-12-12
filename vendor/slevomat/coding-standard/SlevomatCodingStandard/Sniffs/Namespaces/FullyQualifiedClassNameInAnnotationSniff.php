<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Namespaces;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use _PhpScoper04022cd986ec\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode;
use _PhpScoper04022cd986ec\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use SlevomatCodingStandard\Helpers\Annotation\GenericAnnotation;
use SlevomatCodingStandard\Helpers\AnnotationConstantExpressionHelper;
use SlevomatCodingStandard\Helpers\AnnotationHelper;
use SlevomatCodingStandard\Helpers\AnnotationTypeHelper;
use SlevomatCodingStandard\Helpers\TypeHelper;
use SlevomatCodingStandard\Helpers\TypeHintHelper;
use function sprintf;
use function strtolower;
use const _PhpScoper04022cd986ec\T_DOC_COMMENT_OPEN_TAG;
class FullyQualifiedClassNameInAnnotationSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_NON_FULLY_QUALIFIED_CLASS_NAME = 'NonFullyQualifiedClassName';
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
        $annotations = \SlevomatCodingStandard\Helpers\AnnotationHelper::getAnnotations($phpcsFile, $docCommentOpenPointer);
        foreach ($annotations as $annotationName => $annotationsByName) {
            foreach ($annotationsByName as $annotation) {
                if ($annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\GenericAnnotation) {
                    continue;
                }
                if ($annotation->isInvalid()) {
                    continue;
                }
                foreach (\SlevomatCodingStandard\Helpers\AnnotationHelper::getAnnotationTypes($annotation) as $annotationType) {
                    foreach (\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getIdentifierTypeNodes($annotationType) as $typeHintNode) {
                        $typeHint = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getTypeHintFromNode($typeHintNode);
                        $lowercasedTypeHint = \strtolower($typeHint);
                        if (\SlevomatCodingStandard\Helpers\TypeHintHelper::isSimpleTypeHint($lowercasedTypeHint) || \SlevomatCodingStandard\Helpers\TypeHintHelper::isSimpleUnofficialTypeHints($lowercasedTypeHint) || !\SlevomatCodingStandard\Helpers\TypeHelper::isTypeName($typeHint) || \SlevomatCodingStandard\Helpers\TypeHintHelper::isTemplate($phpcsFile, $docCommentOpenPointer, $typeHint)) {
                            continue;
                        }
                        $fullyQualifiedTypeHint = \SlevomatCodingStandard\Helpers\TypeHintHelper::getFullyQualifiedTypeHint($phpcsFile, $annotation->getStartPointer(), $typeHint);
                        if ($fullyQualifiedTypeHint === $typeHint) {
                            continue;
                        }
                        $fix = $phpcsFile->addFixableError(\sprintf('Class name %s in %s should be referenced via a fully qualified name.', $fullyQualifiedTypeHint, $annotationName), $annotation->getStartPointer(), self::CODE_NON_FULLY_QUALIFIED_CLASS_NAME);
                        if (!$fix) {
                            continue;
                        }
                        $fixedAnnotationContent = \SlevomatCodingStandard\Helpers\AnnotationHelper::fixAnnotationType($phpcsFile, $annotation, $typeHintNode, new \_PhpScoper04022cd986ec\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode($fullyQualifiedTypeHint));
                        $phpcsFile->fixer->beginChangeset();
                        $phpcsFile->fixer->replaceToken($annotation->getStartPointer(), $fixedAnnotationContent);
                        for ($i = $annotation->getStartPointer() + 1; $i <= $annotation->getEndPointer(); $i++) {
                            $phpcsFile->fixer->replaceToken($i, '');
                        }
                        $phpcsFile->fixer->endChangeset();
                    }
                }
                foreach (\SlevomatCodingStandard\Helpers\AnnotationHelper::getAnnotationConstantExpressions($annotation) as $constantExpression) {
                    foreach (\SlevomatCodingStandard\Helpers\AnnotationConstantExpressionHelper::getConstantFetchNodes($constantExpression) as $constantFetchNode) {
                        $typeHint = $constantFetchNode->className;
                        $fullyQualifiedTypeHint = \SlevomatCodingStandard\Helpers\TypeHintHelper::getFullyQualifiedTypeHint($phpcsFile, $annotation->getStartPointer(), $typeHint);
                        if ($fullyQualifiedTypeHint === $typeHint) {
                            continue;
                        }
                        $fix = $phpcsFile->addFixableError(\sprintf('Class name %s in %s should be referenced via a fully qualified name.', $fullyQualifiedTypeHint, $annotationName), $annotation->getStartPointer(), self::CODE_NON_FULLY_QUALIFIED_CLASS_NAME);
                        if (!$fix) {
                            continue;
                        }
                        $fixedAnnotationContent = \SlevomatCodingStandard\Helpers\AnnotationHelper::fixAnnotationConstantFetchNode($phpcsFile, $annotation, $constantFetchNode, new \_PhpScoper04022cd986ec\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode($fullyQualifiedTypeHint, $constantFetchNode->name));
                        $phpcsFile->fixer->beginChangeset();
                        $phpcsFile->fixer->replaceToken($annotation->getStartPointer(), $fixedAnnotationContent);
                        for ($i = $annotation->getStartPointer() + 1; $i <= $annotation->getEndPointer(); $i++) {
                            $phpcsFile->fixer->replaceToken($i, '');
                        }
                        $phpcsFile->fixer->endChangeset();
                    }
                }
            }
        }
    }
}
