<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Sniffs\TypeHints;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Sniffs\Sniff;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\TypeNode;
use _PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode;
use SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation;
use SlevomatCodingStandard\Helpers\AnnotationHelper;
use SlevomatCodingStandard\Helpers\AnnotationTypeHelper;
use SlevomatCodingStandard\Helpers\DocCommentHelper;
use SlevomatCodingStandard\Helpers\FunctionHelper;
use SlevomatCodingStandard\Helpers\NamespaceHelper;
use SlevomatCodingStandard\Helpers\ReturnTypeHint;
use SlevomatCodingStandard\Helpers\SniffSettingsHelper;
use SlevomatCodingStandard\Helpers\SuppressHelper;
use SlevomatCodingStandard\Helpers\TokenHelper;
use SlevomatCodingStandard\Helpers\TypeHintHelper;
use function array_key_exists;
use function array_map;
use function array_unique;
use function array_values;
use function count;
use function lcfirst;
use function sprintf;
use function strtolower;
use const _PhpScoper39d23eef9a06\T_CLOSURE;
use const _PhpScoper39d23eef9a06\T_DOC_COMMENT_CLOSE_TAG;
use const _PhpScoper39d23eef9a06\T_DOC_COMMENT_STAR;
use const T_FUNCTION;
class ReturnTypeHintSniff implements \PHP_CodeSniffer\Sniffs\Sniff
{
    public const CODE_MISSING_ANY_TYPE_HINT = 'MissingAnyTypeHint';
    public const CODE_MISSING_NATIVE_TYPE_HINT = 'MissingNativeTypeHint';
    public const CODE_MISSING_TRAVERSABLE_TYPE_HINT_SPECIFICATION = 'MissingTraversableTypeHintSpecification';
    public const CODE_USELESS_ANNOTATION = 'UselessAnnotation';
    private const NAME = 'SlevomatCodingStandard.TypeHints.ReturnTypeHint';
    /** @var bool|null */
    public $enableObjectTypeHint = null;
    /** @var string[] */
    public $traversableTypeHints = [];
    /** @var array<int, string>|null */
    private $normalizedTraversableTypeHints;
    /**
     * @return array<int, (int|string)>
     */
    public function register() : array
    {
        return [\T_FUNCTION, \T_CLOSURE];
    }
    /**
     * @phpcsSuppress SlevomatCodingStandard.TypeHints.ParameterTypeHint.MissingNativeTypeHint
     * @param File $phpcsFile
     * @param int $pointer
     */
    public function process(\PHP_CodeSniffer\Files\File $phpcsFile, $pointer) : void
    {
        $this->enableObjectTypeHint = \SlevomatCodingStandard\Helpers\SniffSettingsHelper::isEnabledByPhpVersion($this->enableObjectTypeHint, 70200);
        if (\SlevomatCodingStandard\Helpers\SuppressHelper::isSniffSuppressed($phpcsFile, $pointer, self::NAME)) {
            return;
        }
        if (\SlevomatCodingStandard\Helpers\DocCommentHelper::hasInheritdocAnnotation($phpcsFile, $pointer)) {
            return;
        }
        $token = $phpcsFile->getTokens()[$pointer];
        if ($token['code'] === \T_FUNCTION) {
            $returnTypeHint = \SlevomatCodingStandard\Helpers\FunctionHelper::findReturnTypeHint($phpcsFile, $pointer);
            $returnAnnotation = \SlevomatCodingStandard\Helpers\FunctionHelper::findReturnAnnotation($phpcsFile, $pointer);
            $prefixedReturnAnnotations = \SlevomatCodingStandard\Helpers\FunctionHelper::getValidPrefixedReturnAnnotations($phpcsFile, $pointer);
            $this->checkFunctionTypeHint($phpcsFile, $pointer, $returnTypeHint, $returnAnnotation, $prefixedReturnAnnotations);
            $this->checkFunctionTraversableTypeHintSpecification($phpcsFile, $pointer, $returnTypeHint, $returnAnnotation, $prefixedReturnAnnotations);
            $this->checkFunctionUselessAnnotation($phpcsFile, $pointer, $returnTypeHint, $returnAnnotation);
        } elseif ($token['code'] === \T_CLOSURE) {
            $this->checkClosureTypeHint($phpcsFile, $pointer);
        }
    }
    /**
     * @param File $phpcsFile
     * @param int $functionPointer
     * @param ReturnTypeHint|null $returnTypeHint
     * @param ReturnAnnotation|null $returnAnnotation
     * @param ReturnAnnotation[] $prefixedReturnAnnotations
     */
    private function checkFunctionTypeHint(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, ?\SlevomatCodingStandard\Helpers\ReturnTypeHint $returnTypeHint, ?\SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation $returnAnnotation, array $prefixedReturnAnnotations) : void
    {
        if ($returnTypeHint !== null) {
            return;
        }
        $methodsWithoutVoidSupport = ['__construct' => \true, '__destruct' => \true, '__clone' => \true];
        if (\array_key_exists(\SlevomatCodingStandard\Helpers\FunctionHelper::getName($phpcsFile, $functionPointer), $methodsWithoutVoidSupport)) {
            return;
        }
        $hasReturnAnnotation = $this->hasReturnAnnotation($returnAnnotation);
        $returnTypeNode = $this->getReturnTypeNode($returnAnnotation);
        $isAnnotationReturnTypeVoid = $returnTypeNode instanceof \_PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode && \strtolower($returnTypeNode->name) === 'void';
        $isAbstract = \SlevomatCodingStandard\Helpers\FunctionHelper::isAbstract($phpcsFile, $functionPointer);
        $returnsValue = $isAbstract ? $hasReturnAnnotation && !$isAnnotationReturnTypeVoid : \SlevomatCodingStandard\Helpers\FunctionHelper::returnsValue($phpcsFile, $functionPointer);
        if ($returnsValue && !$hasReturnAnnotation) {
            if (\SlevomatCodingStandard\Helpers\SuppressHelper::isSniffSuppressed($phpcsFile, $functionPointer, self::getSniffName(self::CODE_MISSING_ANY_TYPE_HINT))) {
                return;
            }
            if (\count($prefixedReturnAnnotations) !== 0) {
                return;
            }
            $phpcsFile->addError(\sprintf('%s %s() does not have return type hint nor @return annotation for its return value.', \SlevomatCodingStandard\Helpers\FunctionHelper::getTypeLabel($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\FunctionHelper::getFullyQualifiedName($phpcsFile, $functionPointer)), $functionPointer, self::CODE_MISSING_ANY_TYPE_HINT);
            return;
        }
        if (\SlevomatCodingStandard\Helpers\SuppressHelper::isSniffSuppressed($phpcsFile, $functionPointer, self::getSniffName(self::CODE_MISSING_NATIVE_TYPE_HINT))) {
            return;
        }
        if (!$returnsValue && (!$hasReturnAnnotation || $isAnnotationReturnTypeVoid)) {
            $message = !$hasReturnAnnotation ? \sprintf('%s %s() does not have void return type hint.', \SlevomatCodingStandard\Helpers\FunctionHelper::getTypeLabel($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\FunctionHelper::getFullyQualifiedName($phpcsFile, $functionPointer)) : \sprintf('%s %s() does not have native return type hint for its return value but it should be possible to add it based on @return annotation "%s".', \SlevomatCodingStandard\Helpers\FunctionHelper::getTypeLabel($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\FunctionHelper::getFullyQualifiedName($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::export($returnTypeNode));
            $fix = $phpcsFile->addFixableError($message, $functionPointer, self::getSniffName(self::CODE_MISSING_NATIVE_TYPE_HINT));
            if ($fix) {
                $phpcsFile->fixer->beginChangeset();
                $phpcsFile->fixer->addContent($phpcsFile->getTokens()[$functionPointer]['parenthesis_closer'], ': void');
                $phpcsFile->fixer->endChangeset();
            }
            return;
        }
        $typeHints = [];
        $nullableReturnTypeHint = \false;
        $originalReturnTypeNode = $returnTypeNode;
        if ($returnTypeNode instanceof \_PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode) {
            $returnTypeNode = $returnTypeNode->type;
        }
        if (\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::containsOneType($returnTypeNode)) {
            /** @var ArrayTypeNode|ArrayShapeNode|IdentifierTypeNode|ThisTypeNode|GenericTypeNode|CallableTypeNode $returnTypeNode */
            $returnTypeNode = $returnTypeNode;
            $typeHints[] = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getTypeHintFromOneType($returnTypeNode);
        } elseif ($returnTypeNode instanceof \_PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode || $returnTypeNode instanceof \_PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            $traversableTypeHints = [];
            foreach ($returnTypeNode->types as $typeNode) {
                if (!\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::containsOneType($typeNode)) {
                    return;
                }
                /** @var ArrayTypeNode|ArrayShapeNode|IdentifierTypeNode|ThisTypeNode|GenericTypeNode|CallableTypeNode $typeNode */
                $typeNode = $typeNode;
                $typeHint = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getTypeHintFromOneType($typeNode);
                if (\strtolower($typeHint) === 'null') {
                    $nullableReturnTypeHint = \true;
                    continue;
                }
                $isTraversable = \SlevomatCodingStandard\Helpers\TypeHintHelper::isTraversableType(\SlevomatCodingStandard\Helpers\TypeHintHelper::getFullyQualifiedTypeHint($phpcsFile, $functionPointer, $typeHint), $this->getTraversableTypeHints());
                if (!$isTraversable && \count($traversableTypeHints) > 0) {
                    return;
                }
                if (!$typeNode instanceof \_PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode && !$typeNode instanceof \_PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode && $isTraversable) {
                    $traversableTypeHints[] = $typeHint;
                }
                $typeHints[] = $typeHint;
            }
            $traversableTypeHints = \array_values(\array_unique($traversableTypeHints));
            if (\count($traversableTypeHints) > 1) {
                return;
            }
        }
        $typeHints = \array_values(\array_unique($typeHints));
        if (\count($typeHints) === 1) {
            $possibleReturnTypeHint = $typeHints[0];
        } elseif (\count($typeHints) === 2) {
            /** @var UnionTypeNode|IntersectionTypeNode $returnTypeNode */
            $returnTypeNode = $returnTypeNode;
            $itemsSpecificationTypeHint = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getItemsSpecificationTypeFromType($returnTypeNode);
            if ($itemsSpecificationTypeHint === null) {
                return;
            }
            $possibleReturnTypeHint = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getTraversableTypeHintFromType($returnTypeNode, $phpcsFile, $functionPointer, $this->getTraversableTypeHints());
            if ($possibleReturnTypeHint === null) {
                return;
            }
        } else {
            return;
        }
        if (!\SlevomatCodingStandard\Helpers\TypeHintHelper::isValidTypeHint($possibleReturnTypeHint, $this->enableObjectTypeHint)) {
            return;
        }
        if ($originalReturnTypeNode instanceof \_PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode) {
            $nullableReturnTypeHint = \true;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('%s %s() does not have native return type hint for its return value but it should be possible to add it based on @return annotation "%s".', \SlevomatCodingStandard\Helpers\FunctionHelper::getTypeLabel($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\FunctionHelper::getFullyQualifiedName($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::export($returnTypeNode)), $functionPointer, self::CODE_MISSING_NATIVE_TYPE_HINT);
        if (!$fix) {
            return;
        }
        $returnTypeHint = \SlevomatCodingStandard\Helpers\TypeHintHelper::isSimpleTypeHint($possibleReturnTypeHint) ? \SlevomatCodingStandard\Helpers\TypeHintHelper::convertLongSimpleTypeHintToShort($possibleReturnTypeHint) : $possibleReturnTypeHint;
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->addContent($phpcsFile->getTokens()[$functionPointer]['parenthesis_closer'], \sprintf(': %s%s', $nullableReturnTypeHint ? '?' : '', $returnTypeHint));
        $phpcsFile->fixer->endChangeset();
    }
    /**
     * @param File $phpcsFile
     * @param int $functionPointer
     * @param ReturnTypeHint|null $returnTypeHint
     * @param ReturnAnnotation|null $returnAnnotation
     * @param ReturnAnnotation[] $prefixedReturnAnnotations
     */
    private function checkFunctionTraversableTypeHintSpecification(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, ?\SlevomatCodingStandard\Helpers\ReturnTypeHint $returnTypeHint, ?\SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation $returnAnnotation, array $prefixedReturnAnnotations) : void
    {
        if (\SlevomatCodingStandard\Helpers\SuppressHelper::isSniffSuppressed($phpcsFile, $functionPointer, self::getSniffName(self::CODE_MISSING_TRAVERSABLE_TYPE_HINT_SPECIFICATION))) {
            return;
        }
        $hasTraversableTypeHint = $this->hasTraversableTypeHint($phpcsFile, $functionPointer, $returnTypeHint, $returnAnnotation);
        $hasReturnAnnotation = $this->hasReturnAnnotation($returnAnnotation);
        if ($hasTraversableTypeHint && !$hasReturnAnnotation) {
            if (\count($prefixedReturnAnnotations) !== 0) {
                return;
            }
            $phpcsFile->addError(\sprintf('%s %s() does not have @return annotation for its traversable return value.', \SlevomatCodingStandard\Helpers\FunctionHelper::getTypeLabel($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\FunctionHelper::getFullyQualifiedName($phpcsFile, $functionPointer)), $functionPointer, self::CODE_MISSING_TRAVERSABLE_TYPE_HINT_SPECIFICATION);
            return;
        }
        $returnTypeNode = $this->getReturnTypeNode($returnAnnotation);
        if (!$hasReturnAnnotation) {
            return;
        }
        if (!$hasTraversableTypeHint && !\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::containsTraversableType($returnTypeNode, $phpcsFile, $functionPointer, $this->getTraversableTypeHints())) {
            return;
        }
        if (\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::containsItemsSpecificationForTraversable($returnTypeNode, $phpcsFile, $functionPointer, $this->getTraversableTypeHints())) {
            return;
        }
        /** @var ReturnAnnotation $returnAnnotation */
        $returnAnnotation = $returnAnnotation;
        $phpcsFile->addError(\sprintf('@return annotation of %s %s() does not specify type hint for items of its traversable return value.', \lcfirst(\SlevomatCodingStandard\Helpers\FunctionHelper::getTypeLabel($phpcsFile, $functionPointer)), \SlevomatCodingStandard\Helpers\FunctionHelper::getFullyQualifiedName($phpcsFile, $functionPointer)), $returnAnnotation->getStartPointer(), self::CODE_MISSING_TRAVERSABLE_TYPE_HINT_SPECIFICATION);
    }
    private function checkFunctionUselessAnnotation(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, ?\SlevomatCodingStandard\Helpers\ReturnTypeHint $returnTypeHint, ?\SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation $returnAnnotation) : void
    {
        if ($returnAnnotation === null) {
            return;
        }
        if (\SlevomatCodingStandard\Helpers\SuppressHelper::isSniffSuppressed($phpcsFile, $functionPointer, self::getSniffName(self::CODE_USELESS_ANNOTATION))) {
            return;
        }
        if (!\SlevomatCodingStandard\Helpers\AnnotationHelper::isAnnotationUseless($phpcsFile, $functionPointer, $returnTypeHint, $returnAnnotation, $this->getTraversableTypeHints())) {
            return;
        }
        $fix = $phpcsFile->addFixableError(\sprintf('%s %s() has useless @return annotation.', \SlevomatCodingStandard\Helpers\FunctionHelper::getTypeLabel($phpcsFile, $functionPointer), \SlevomatCodingStandard\Helpers\FunctionHelper::getFullyQualifiedName($phpcsFile, $functionPointer)), $returnAnnotation->getStartPointer(), self::CODE_USELESS_ANNOTATION);
        if (!$fix) {
            return;
        }
        $docCommentOpenPointer = \SlevomatCodingStandard\Helpers\DocCommentHelper::findDocCommentOpenToken($phpcsFile, $functionPointer);
        $starPointer = \SlevomatCodingStandard\Helpers\TokenHelper::findPrevious($phpcsFile, \T_DOC_COMMENT_STAR, $returnAnnotation->getStartPointer() - 1, $docCommentOpenPointer);
        $changeStart = $starPointer ?? $docCommentOpenPointer + 1;
        /** @var int $changeEnd */
        $changeEnd = \SlevomatCodingStandard\Helpers\TokenHelper::findNext($phpcsFile, [\T_DOC_COMMENT_CLOSE_TAG, \T_DOC_COMMENT_STAR], $returnAnnotation->getEndPointer() + 1) - 1;
        $phpcsFile->fixer->beginChangeset();
        for ($i = $changeStart; $i <= $changeEnd; $i++) {
            $phpcsFile->fixer->replaceToken($i, '');
        }
        $phpcsFile->fixer->endChangeset();
    }
    private function checkClosureTypeHint(\PHP_CodeSniffer\Files\File $phpcsFile, int $closurePointer) : void
    {
        $returnTypeHint = \SlevomatCodingStandard\Helpers\FunctionHelper::findReturnTypeHint($phpcsFile, $closurePointer);
        $returnsValue = \SlevomatCodingStandard\Helpers\FunctionHelper::returnsValue($phpcsFile, $closurePointer);
        if ($returnsValue || $returnTypeHint !== null) {
            return;
        }
        $fix = $phpcsFile->addFixableError('Closure does not have void return type hint.', $closurePointer, self::CODE_MISSING_NATIVE_TYPE_HINT);
        if (!$fix) {
            return;
        }
        $tokens = $phpcsFile->getTokens();
        /** @var int $position */
        $position = \SlevomatCodingStandard\Helpers\TokenHelper::findPreviousEffective($phpcsFile, $tokens[$closurePointer]['scope_opener'] - 1, $closurePointer);
        $phpcsFile->fixer->beginChangeset();
        $phpcsFile->fixer->addContent($position, ': void');
        $phpcsFile->fixer->endChangeset();
    }
    /**
     * @param ReturnAnnotation|null $returnAnnotation
     * @return GenericTypeNode|CallableTypeNode|IntersectionTypeNode|UnionTypeNode|ArrayTypeNode|ArrayShapeNode|IdentifierTypeNode|ThisTypeNode|NullableTypeNode|ConstTypeNode|null
     */
    private function getReturnTypeNode(?\SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation $returnAnnotation) : ?\_PhpScoper39d23eef9a06\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        if ($this->hasReturnAnnotation($returnAnnotation)) {
            return $returnAnnotation->getType();
        }
        return null;
    }
    private function hasTraversableTypeHint(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, ?\SlevomatCodingStandard\Helpers\ReturnTypeHint $returnTypeHint, ?\SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation $returnAnnotation) : bool
    {
        if ($returnTypeHint !== null && \SlevomatCodingStandard\Helpers\TypeHintHelper::isTraversableType(\SlevomatCodingStandard\Helpers\TypeHintHelper::getFullyQualifiedTypeHint($phpcsFile, $functionPointer, $returnTypeHint->getTypeHint()), $this->getTraversableTypeHints())) {
            return \true;
        }
        return $this->hasReturnAnnotation($returnAnnotation) && \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::containsTraversableType($this->getReturnTypeNode($returnAnnotation), $phpcsFile, $functionPointer, $this->getTraversableTypeHints());
    }
    private function hasReturnAnnotation(?\SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation $returnAnnotation) : bool
    {
        return $returnAnnotation !== null && $returnAnnotation->getContent() !== null && !$returnAnnotation->isInvalid();
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
