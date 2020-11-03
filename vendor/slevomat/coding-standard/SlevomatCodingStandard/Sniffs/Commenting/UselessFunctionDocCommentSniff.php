<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\Commenting;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use SlevomatCodingStandard\Helpers\AnnotationHelper;
use SlevomatCodingStandard\Helpers\DocCommentHelper;
use SlevomatCodingStandard\Helpers\FunctionHelper;
use SlevomatCodingStandard\Helpers\NamespaceHelper;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\SuppressHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use function array_key_exists;
use function array_map;
use function in_array;
use function sprintf;
use const T_FUNCTION;
class UselessFunctionDocCommentSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_USELESS_DOC_COMMENT = 'UselessDocComment';
    private const NAME = 'SlevomatCodingStandard.Commenting.UselessFunctionDocComment';
    /** @var string[] */
    public $traversableTypeHints = [];
    /** @var array<int, string>|null */
    private $normalizedTraversableTypeHints;
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
     * @param int $functionPointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $functionPointer) : void
    {
        if (!\SlevomatCodingStandard\Helpers\DocCommentHelper::hasDocComment($phpcsFile, $functionPointer)) {
            return;
        }
        if (\SlevomatCodingStandard\Helpers\SuppressHelper::isSniffSuppressed($phpcsFile, $functionPointer, $this->getSniffName(self::CODE_USELESS_DOC_COMMENT))) {
            return;
        }
        if (\SlevomatCodingStandard\Helpers\DocCommentHelper::hasInheritdocAnnotation($phpcsFile, $functionPointer)) {
            return;
        }
        if (\SlevomatCodingStandard\Helpers\DocCommentHelper::hasDocCommentDescription($phpcsFile, $functionPointer)) {
            return;
        }
        $returnTypeHint = \SlevomatCodingStandard\Helpers\FunctionHelper::findReturnTypeHint($phpcsFile, $functionPointer);
        $returnAnnotation = \SlevomatCodingStandard\Helpers\FunctionHelper::findReturnAnnotation($phpcsFile, $functionPointer);
        if ($returnAnnotation !== null && !\SlevomatCodingStandard\Helpers\AnnotationHelper::isAnnotationUseless($phpcsFile, $functionPointer, $returnTypeHint, $returnAnnotation, $this->getTraversableTypeHints())) {
            return;
        }
        $parameterTypeHints = \SlevomatCodingStandard\Helpers\FunctionHelper::getParametersTypeHints($phpcsFile, $functionPointer);
        $parametersAnnotations = \SlevomatCodingStandard\Helpers\FunctionHelper::getValidParametersAnnotations($phpcsFile, $functionPointer);
        foreach ($parametersAnnotations as $parameterName => $parameterAnnotation) {
            if (!\array_key_exists($parameterName, $parameterTypeHints)) {
                return;
            }
            if (!\SlevomatCodingStandard\Helpers\AnnotationHelper::isAnnotationUseless($phpcsFile, $functionPointer, $parameterTypeHints[$parameterName], $parameterAnnotation, $this->getTraversableTypeHints())) {
                return;
            }
        }
        foreach (\SlevomatCodingStandard\Helpers\AnnotationHelper::getAnnotations($phpcsFile, $functionPointer) as [$annotation]) {
            if (!\in_array($annotation->getName(), ['@param', '@return'], \true)) {
                return;
            }
        }
        $fix = $phpcsFile->addFixableError(\sprintf('%s %s() does not need documentation comment.', \SlevomatCodingStandard\Helpers\FunctionHelper::getTypeLabel($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\FunctionHelper::getFullyQualifiedName($phpcsFile, $functionPointer)), $functionPointer, self::CODE_USELESS_DOC_COMMENT);
        if (!$fix) {
            return;
        }
        /** @var int $docCommentOpenPointer */
        $docCommentOpenPointer = \SlevomatCodingStandard\Helpers\DocCommentHelper::findDocCommentOpenToken($phpcsFile, $functionPointer);
        $docCommentClosePointer = $phpcsFile->getTokens()[$docCommentOpenPointer]['comment_closer'];
        $changeStart = $docCommentOpenPointer;
        /** @var int $changeEnd */
        $changeEnd = \SlevomatCodingStandard\Helpers\TokenHelper::findNextEffective($phpcsFile, $docCommentClosePointer + 1) - 1;
        $phpcsFile->fixer->beginChangeset();
        for ($i = $changeStart; $i <= $changeEnd; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function getSniffName(string $sniffName) : string
    {
        return \sprintf('%s.%s', self::NAME, $sniffName);
    }
    /**
     * @return array<int, string>
     */
    private function getTraversableTypeHints() : array
    {
        if ($this->normalizedTraversableTypeHints === null) {
            $this->normalizedTraversableTypeHints = \array_map(static function (string $typeHint) : string {
                return \SlevomatCodingStandard\Helpers\NamespaceHelper::isFullyQualifiedName($typeHint) ? $typeHint : \sprintf('%s%s', \SlevomatCodingStandard\Helpers\NamespaceHelper::NAMESPACE_SEPARATOR, $typeHint);
            }, \SlevomatCodingStandard\Helpers\SniffSettingsHelper::normalizeArray($this->traversableTypeHints));
        }
        return $this->normalizedTraversableTypeHints;
    }
}
