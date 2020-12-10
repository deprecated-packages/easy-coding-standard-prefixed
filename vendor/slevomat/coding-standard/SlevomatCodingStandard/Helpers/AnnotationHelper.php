<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Util\Tokens;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\PhpDoc\InvalidTagValueNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\TypeNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Lexer\Lexer;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\ConstExprParser;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\PhpDocParser;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\TokenIterator;
use _PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\TypeParser;
use SlevomatCodingStandard\Helpers\Annotation\Annotation;
use SlevomatCodingStandard\Helpers\Annotation\ExtendsAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\GenericAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\ImplementsAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\MixinAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\ParameterAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\ThrowsAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\UseAnnotation;
use SlevomatCodingStandard\Helpers\Annotation\VariableAnnotation;
use function array_key_exists;
use function array_merge;
use function get_class;
use function in_array;
use function preg_match;
use function preg_match_all;
use function preg_replace;
use function sprintf;
use function strtolower;
use function trim;
use const _PhpScoper17bb67c99ade\T_DOC_COMMENT_CLOSE_TAG;
use const _PhpScoper17bb67c99ade\T_DOC_COMMENT_STAR;
use const _PhpScoper17bb67c99ade\T_DOC_COMMENT_STRING;
use const _PhpScoper17bb67c99ade\T_DOC_COMMENT_TAG;
use const _PhpScoper17bb67c99ade\T_DOC_COMMENT_WHITESPACE;
class AnnotationHelper
{
    public const PREFIXES = ['psalm', 'phpstan'];
    /**
     * @internal
     * @param VariableAnnotation|ParameterAnnotation|ReturnAnnotation|ThrowsAnnotation|PropertyAnnotation|MethodAnnotation|TemplateAnnotation|ExtendsAnnotation|ImplementsAnnotation|UseAnnotation|MixinAnnotation $annotation
     * @return TypeNode[]
     */
    public static function getAnnotationTypes(\SlevomatCodingStandard\Helpers\Annotation\Annotation $annotation) : array
    {
        $annotationTypes = [];
        if ($annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation) {
            if ($annotation->getMethodReturnType() !== null) {
                $annotationTypes[] = $annotation->getMethodReturnType();
            }
            foreach ($annotation->getMethodParameters() as $methodParameterAnnotation) {
                if ($methodParameterAnnotation->type === null) {
                    continue;
                }
                $annotationTypes[] = $methodParameterAnnotation->type;
            }
        } elseif ($annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation) {
            if ($annotation->getBound() !== null) {
                $annotationTypes[] = $annotation->getBound();
            }
        } else {
            $annotationTypes[] = $annotation->getType();
        }
        return $annotationTypes;
    }
    /**
     * @internal
     * @param VariableAnnotation|ParameterAnnotation|ReturnAnnotation|ThrowsAnnotation|PropertyAnnotation|MethodAnnotation|TemplateAnnotation|ExtendsAnnotation|ImplementsAnnotation|UseAnnotation|MixinAnnotation $annotation
     * @return ConstExprNode[]
     */
    public static function getAnnotationConstantExpressions(\SlevomatCodingStandard\Helpers\Annotation\Annotation $annotation) : array
    {
        $constantExpressions = [];
        if ($annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation) {
            foreach ($annotation->getMethodParameters() as $methodParameterAnnotation) {
                if ($methodParameterAnnotation->defaultValue === null) {
                    continue;
                }
                $constantExpressions[] = $methodParameterAnnotation->defaultValue;
            }
        }
        foreach (self::getAnnotationTypes($annotation) as $annotationType) {
            foreach (\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getConstantTypeNodes($annotationType) as $constTypeNode) {
                $constantExpressions[] = $constTypeNode->constExpr;
            }
        }
        return $constantExpressions;
    }
    /**
     * @internal
     * @param File $phpcsFile
     * @param VariableAnnotation|ParameterAnnotation|ReturnAnnotation|ThrowsAnnotation|PropertyAnnotation|MethodAnnotation|TemplateAnnotation|ExtendsAnnotation|ImplementsAnnotation|UseAnnotation|MixinAnnotation $annotation
     * @param TypeNode $typeNode
     * @param TypeNode $fixedTypeNode
     * @return string
     */
    public static function fixAnnotationType(\PHP_CodeSniffer\Files\File $phpcsFile, \SlevomatCodingStandard\Helpers\Annotation\Annotation $annotation, \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode, \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\TypeNode $fixedTypeNode) : string
    {
        $fixedAnnotation = self::fixAnnotation($annotation, $typeNode, $fixedTypeNode);
        return self::fix($phpcsFile, $annotation, $fixedAnnotation);
    }
    /**
     * @internal
     * @param File $phpcsFile
     * @param VariableAnnotation|ParameterAnnotation|ReturnAnnotation|ThrowsAnnotation|PropertyAnnotation|MethodAnnotation|TemplateAnnotation|ExtendsAnnotation|ImplementsAnnotation|UseAnnotation|MixinAnnotation $annotation
     * @param ConstFetchNode $node
     * @param ConstFetchNode $fixedNode
     * @return string
     */
    public static function fixAnnotationConstantFetchNode(\PHP_CodeSniffer\Files\File $phpcsFile, \SlevomatCodingStandard\Helpers\Annotation\Annotation $annotation, \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode $node, \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\ConstExpr\ConstFetchNode $fixedNode) : string
    {
        if ($annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation) {
            $fixedContentNode = clone $annotation->getContentNode();
            foreach ($fixedContentNode->parameters as $parameterNo => $parameterNode) {
                if ($parameterNode->defaultValue === null) {
                    continue;
                }
                $fixedContentNode->parameters[$parameterNo] = clone $parameterNode;
                $fixedContentNode->parameters[$parameterNo]->defaultValue = \SlevomatCodingStandard\Helpers\AnnotationConstantExpressionHelper::change($parameterNode->defaultValue, $node, $fixedNode);
            }
            $fixedAnnotation = new \SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation($annotation->getName(), $annotation->getStartPointer(), $annotation->getEndPointer(), $annotation->getContent(), $fixedContentNode);
        } else {
            $fixedAnnotation = $annotation;
            foreach (self::getAnnotationTypes($annotation) as $annotationType) {
                foreach (\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getConstantTypeNodes($annotationType) as $constTypeNode) {
                    foreach (\SlevomatCodingStandard\Helpers\AnnotationConstantExpressionHelper::getConstantFetchNodes($constTypeNode->constExpr) as $constFetchNode) {
                        if ($constFetchNode !== $node) {
                            continue;
                        }
                        $fixedConstTypeNode = new \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode(\SlevomatCodingStandard\Helpers\AnnotationConstantExpressionHelper::change($constTypeNode->constExpr, $node, $fixedNode));
                        $fixedAnnotation = self::fixAnnotation($annotation, $constTypeNode, $fixedConstTypeNode);
                        break 3;
                    }
                }
            }
        }
        return self::fix($phpcsFile, $annotation, $fixedAnnotation);
    }
    /**
     * @param File $phpcsFile
     * @param int $pointer
     * @param string $annotationName
     * @return (VariableAnnotation|ParameterAnnotation|ReturnAnnotation|ThrowsAnnotation|PropertyAnnotation|MethodAnnotation|TemplateAnnotation|ExtendsAnnotation|ImplementsAnnotation|UseAnnotation|MixinAnnotation|GenericAnnotation)[]
     */
    public static function getAnnotationsByName(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer, string $annotationName) : array
    {
        $annotations = self::getAnnotations($phpcsFile, $pointer);
        return $annotations[$annotationName] ?? [];
    }
    /**
     * @param File $phpcsFile
     * @param int $pointer
     * @return (VariableAnnotation|ParameterAnnotation|ReturnAnnotation|ThrowsAnnotation|PropertyAnnotation|MethodAnnotation|TemplateAnnotation|ExtendsAnnotation|ImplementsAnnotation|UseAnnotation|MixinAnnotation|GenericAnnotation)[][]
     */
    public static function getAnnotations(\PHP_CodeSniffer\Files\File $phpcsFile, int $pointer) : array
    {
        return \SlevomatCodingStandard\Helpers\SniffLocalCache::getAndSetIfNotCached($phpcsFile, \sprintf('annotations-%d', $pointer), static function () use($phpcsFile, $pointer) : array {
            $annotations = [];
            $docCommentOpenToken = \SlevomatCodingStandard\Helpers\DocCommentHelper::findDocCommentOpenToken($phpcsFile, $pointer);
            if ($docCommentOpenToken === null) {
                return $annotations;
            }
            $annotationNameCodes = \array_merge([\T_DOC_COMMENT_TAG], \PHP_CodeSniffer\Util\Tokens::$phpcsCommentTokens);
            $tokens = $phpcsFile->getTokens();
            $i = $docCommentOpenToken + 1;
            while ($i < $tokens[$docCommentOpenToken]['comment_closer']) {
                if (!\in_array($tokens[$i]['code'], $annotationNameCodes, \true)) {
                    $i++;
                    continue;
                }
                $annotationStartPointer = $i;
                $annotationEndPointer = $i;
                // Fix for wrong PHPCS parsing
                $parenthesesLevel = (int) \preg_match_all('~[({]~', $tokens[$i]['content']) - (int) \preg_match_all('~[)}]~', $tokens[$i]['content']);
                $annotationCode = $tokens[$i]['content'];
                for ($j = $i + 1; $j <= $tokens[$docCommentOpenToken]['comment_closer']; $j++) {
                    if ($tokens[$j]['code'] === \T_DOC_COMMENT_CLOSE_TAG) {
                        $i = $j;
                        break;
                    }
                    if (\in_array($tokens[$j]['code'], $annotationNameCodes, \true) && $parenthesesLevel === 0) {
                        $i = $j;
                        break;
                    }
                    if ($tokens[$j]['code'] === \T_DOC_COMMENT_STAR) {
                        continue;
                    }
                    if (\in_array($tokens[$j]['code'], \array_merge([\T_DOC_COMMENT_STRING], $annotationNameCodes), \true)) {
                        $annotationEndPointer = $j;
                    } elseif ($tokens[$j]['code'] === \T_DOC_COMMENT_WHITESPACE) {
                        if (\array_key_exists($j - 1, $tokens) && $tokens[$j - 1]['code'] === \T_DOC_COMMENT_STAR) {
                            continue;
                        }
                        if (\array_key_exists($j + 1, $tokens) && $tokens[$j + 1]['code'] === \T_DOC_COMMENT_STAR) {
                            continue;
                        }
                    }
                    $parenthesesLevel += (int) \preg_match_all('~[({]~', $tokens[$j]['content']) - (int) \preg_match_all('~[)}]~', $tokens[$j]['content']);
                    $annotationCode .= $tokens[$j]['content'];
                }
                $annotationName = $tokens[$annotationStartPointer]['content'];
                $annotationParameters = null;
                $annotationContent = null;
                if (\preg_match('~^(@[-a-zA-Z\\\\:]+)(?:\\((.*)\\))?(?:\\s+(.+))?($)~s', \trim($annotationCode), $matches) !== 0) {
                    $annotationName = $matches[1];
                    $annotationParameters = \trim($matches[2]);
                    if ($annotationParameters === '') {
                        $annotationParameters = null;
                    }
                    $annotationContent = \trim($matches[3]);
                    if ($annotationContent === '') {
                        $annotationContent = null;
                    }
                }
                $mapping = ['@param' => \SlevomatCodingStandard\Helpers\Annotation\ParameterAnnotation::class, '@psalm-param' => \SlevomatCodingStandard\Helpers\Annotation\ParameterAnnotation::class, '@phpstan-param' => \SlevomatCodingStandard\Helpers\Annotation\ParameterAnnotation::class, '@return' => \SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation::class, '@psalm-return' => \SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation::class, '@phpstan-return' => \SlevomatCodingStandard\Helpers\Annotation\ReturnAnnotation::class, '@var' => \SlevomatCodingStandard\Helpers\Annotation\VariableAnnotation::class, '@psalm-var' => \SlevomatCodingStandard\Helpers\Annotation\VariableAnnotation::class, '@phpstan-var' => \SlevomatCodingStandard\Helpers\Annotation\VariableAnnotation::class, '@throws' => \SlevomatCodingStandard\Helpers\Annotation\ThrowsAnnotation::class, '@phpstan-throws' => \SlevomatCodingStandard\Helpers\Annotation\ThrowsAnnotation::class, '@property' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@psalm-property' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@phpstan-property' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@property-read' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@psalm-property-read' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@phpstan-property-read' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@property-write' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@psalm-property-write' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@phpstan-property-write' => \SlevomatCodingStandard\Helpers\Annotation\PropertyAnnotation::class, '@method' => \SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation::class, '@psalm-method' => \SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation::class, '@phpstan-method' => \SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation::class, '@template' => \SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation::class, '@psalm-template' => \SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation::class, '@phpstan-template' => \SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation::class, '@template-covariant' => \SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation::class, '@psalm-template-covariant' => \SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation::class, '@phpstan-template-covariant' => \SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation::class, '@extends' => \SlevomatCodingStandard\Helpers\Annotation\ExtendsAnnotation::class, '@template-extends' => \SlevomatCodingStandard\Helpers\Annotation\ExtendsAnnotation::class, '@phpstan-extends' => \SlevomatCodingStandard\Helpers\Annotation\ExtendsAnnotation::class, '@implements' => \SlevomatCodingStandard\Helpers\Annotation\ImplementsAnnotation::class, '@template-implements' => \SlevomatCodingStandard\Helpers\Annotation\ImplementsAnnotation::class, '@phpstan-implements' => \SlevomatCodingStandard\Helpers\Annotation\ImplementsAnnotation::class, '@use' => \SlevomatCodingStandard\Helpers\Annotation\UseAnnotation::class, '@template-use' => \SlevomatCodingStandard\Helpers\Annotation\UseAnnotation::class, '@phpstan-use' => \SlevomatCodingStandard\Helpers\Annotation\UseAnnotation::class, '@mixin' => \SlevomatCodingStandard\Helpers\Annotation\MixinAnnotation::class];
                if (\array_key_exists($annotationName, $mapping)) {
                    $className = $mapping[$annotationName];
                    $parsedContent = null;
                    if ($annotationContent !== null) {
                        $parsedContent = self::parseAnnotationContent($annotationName, $annotationContent);
                        if ($parsedContent instanceof \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\PhpDoc\InvalidTagValueNode) {
                            $parsedContent = null;
                        }
                    }
                    $annotation = new $className($annotationName, $annotationStartPointer, $annotationEndPointer, $annotationContent, $parsedContent);
                } else {
                    $annotation = new \SlevomatCodingStandard\Helpers\Annotation\GenericAnnotation($annotationName, $annotationStartPointer, $annotationEndPointer, $annotationParameters, $annotationContent);
                }
                $annotations[$annotationName][] = $annotation;
            }
            return $annotations;
        });
    }
    /**
     * @param File $phpcsFile
     * @param int $functionPointer
     * @param ReturnTypeHint|ParameterTypeHint|PropertyTypeHint|null $typeHint
     * @param ReturnAnnotation|ParameterAnnotation|VariableAnnotation $annotation
     * @param array<int, string> $traversableTypeHints
     * @return bool
     */
    public static function isAnnotationUseless(\PHP_CodeSniffer\Files\File $phpcsFile, int $functionPointer, $typeHint, \SlevomatCodingStandard\Helpers\Annotation\Annotation $annotation, array $traversableTypeHints) : bool
    {
        if ($annotation->isInvalid()) {
            return \false;
        }
        if ($typeHint === null || $annotation->getContent() === null) {
            return \false;
        }
        if ($annotation->hasDescription()) {
            return \false;
        }
        if (\SlevomatCodingStandard\Helpers\TypeHintHelper::isTraversableType(\SlevomatCodingStandard\Helpers\TypeHintHelper::getFullyQualifiedTypeHint($phpcsFile, $functionPointer, $typeHint->getTypeHint()), $traversableTypeHints)) {
            return \false;
        }
        if (\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::containsStaticOrThisType($annotation->getType())) {
            return \false;
        }
        if (\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::isCompoundOfNull($annotation->getType())) {
            /** @var UnionTypeNode $annotationTypeNode */
            $annotationTypeNode = $annotation->getType();
            $annotationTypeHintNode = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getTypeFromNullableType($annotationTypeNode);
            $annotationTypeHint = $annotationTypeHintNode instanceof \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode ? $annotationTypeHintNode->name : (string) $annotationTypeHintNode;
            return \SlevomatCodingStandard\Helpers\TypeHintHelper::typeHintEqualsAnnotation($phpcsFile, $functionPointer, $typeHint->getTypeHint(), $annotationTypeHint);
        }
        if (!\SlevomatCodingStandard\Helpers\AnnotationTypeHelper::containsOneType($annotation->getType())) {
            return \false;
        }
        if ($annotation->getType() instanceof \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode) {
            return \false;
        }
        if ($annotation->getType() instanceof \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            return \false;
        }
        if ($annotation->getType() instanceof \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            return \false;
        }
        /** @var GenericTypeNode|CallableTypeNode|IdentifierTypeNode|ThisTypeNode $annotationTypeNode */
        $annotationTypeNode = $annotation->getType();
        if ($annotationTypeNode instanceof \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode && \in_array(\strtolower($annotationTypeNode->name), ['true', 'false', 'class-string', 'trait-string', 'callable-string', 'numeric-string'], \true)) {
            return \false;
        }
        $annotationTypeHint = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::getTypeHintFromOneType($annotationTypeNode);
        return \SlevomatCodingStandard\Helpers\TypeHintHelper::typeHintEqualsAnnotation($phpcsFile, $functionPointer, $typeHint->getTypeHint(), $annotationTypeHint);
    }
    /**
     * @param VariableAnnotation|ParameterAnnotation|ReturnAnnotation|ThrowsAnnotation|PropertyAnnotation|MethodAnnotation|TemplateAnnotation|ExtendsAnnotation|ImplementsAnnotation|UseAnnotation|MixinAnnotation $annotation
     * @param TypeNode $typeNode
     * @param TypeNode $fixedTypeNode
     * @return Annotation
     */
    private static function fixAnnotation(\SlevomatCodingStandard\Helpers\Annotation\Annotation $annotation, \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode, \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\Type\TypeNode $fixedTypeNode) : \SlevomatCodingStandard\Helpers\Annotation\Annotation
    {
        if ($annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\MethodAnnotation) {
            $fixedContentNode = clone $annotation->getContentNode();
            if ($fixedContentNode->returnType !== null) {
                $fixedContentNode->returnType = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::change($fixedContentNode->returnType, $typeNode, $fixedTypeNode);
            }
            foreach ($fixedContentNode->parameters as $parameterNo => $parameterNode) {
                if ($parameterNode->type === null) {
                    continue;
                }
                $fixedContentNode->parameters[$parameterNo] = clone $parameterNode;
                $fixedContentNode->parameters[$parameterNo]->type = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::change($parameterNode->type, $typeNode, $fixedTypeNode);
            }
        } elseif ($annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\TemplateAnnotation) {
            $fixedContentNode = clone $annotation->getContentNode();
            $fixedContentNode->bound = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::change($annotation->getBound(), $typeNode, $fixedTypeNode);
        } elseif ($annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\ExtendsAnnotation || $annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\ImplementsAnnotation || $annotation instanceof \SlevomatCodingStandard\Helpers\Annotation\UseAnnotation) {
            $fixedContentNode = clone $annotation->getContentNode();
            /** @var GenericTypeNode $fixedType */
            $fixedType = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::change($annotation->getType(), $typeNode, $fixedTypeNode);
            $fixedContentNode->type = $fixedType;
        } else {
            $fixedContentNode = clone $annotation->getContentNode();
            $fixedContentNode->type = \SlevomatCodingStandard\Helpers\AnnotationTypeHelper::change($annotation->getType(), $typeNode, $fixedTypeNode);
        }
        $annotationClassName = \get_class($annotation);
        return new $annotationClassName($annotation->getName(), $annotation->getStartPointer(), $annotation->getEndPointer(), $annotation->getContent(), $fixedContentNode);
    }
    private static function fix(\PHP_CodeSniffer\Files\File $phpcsFile, \SlevomatCodingStandard\Helpers\Annotation\Annotation $annotation, \SlevomatCodingStandard\Helpers\Annotation\Annotation $fixedAnnotation) : string
    {
        $spaceAfterContent = '';
        if (\preg_match('~(\\s+)$~', \SlevomatCodingStandard\Helpers\TokenHelper::getContent($phpcsFile, $annotation->getStartPointer(), $annotation->getEndPointer()), $matches) > 0) {
            $spaceAfterContent = $matches[1];
        }
        $fixedAnnotationContent = $fixedAnnotation->export() . $spaceAfterContent;
        return \preg_replace('~(\\r\\n|\\n|\\r)~', '\\1 * ', $fixedAnnotationContent);
    }
    private static function parseAnnotationContent(string $annotationName, string $annotationContent) : \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Ast\PhpDoc\PhpDocTagValueNode
    {
        $annotationContentWithoutNewLines = \preg_replace('~[\\r\\n]~', ' ', $annotationContent);
        $tokens = new \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\TokenIterator(self::getPhpDocLexer()->tokenize($annotationContentWithoutNewLines));
        return self::getPhpDocParser()->parseTagValue($tokens, $annotationName);
    }
    private static function getPhpDocLexer() : \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Lexer\Lexer
    {
        static $phpDocLexer;
        if ($phpDocLexer === null) {
            $phpDocLexer = new \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Lexer\Lexer();
        }
        return $phpDocLexer;
    }
    private static function getPhpDocParser() : \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\PhpDocParser
    {
        static $phpDocParser;
        if ($phpDocParser === null) {
            $constantExpressionParser = new \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\ConstExprParser();
            $phpDocParser = new \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\PhpDocParser(new \_PhpScoper17bb67c99ade\PHPStan\PhpDocParser\Parser\TypeParser($constantExpressionParser), $constantExpressionParser);
        }
        return $phpDocParser;
    }
}
