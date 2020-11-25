<?php

declare (strict_types=1);
namespace SlevomatCodingStandard\Helpers;

use PHP_CodeSniffer\Files\File;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprFloatNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprIntegerNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeItemNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeParameterNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode;
use _PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode;
use function array_merge;
use function count;
use function in_array;
use function preg_replace;
use function strtolower;
use function substr;
/**
 * @internal
 */
class AnnotationTypeHelper
{
    /**
     * @param TypeNode $typeNode
     * @return IdentifierTypeNode[]|ThisTypeNode[]
     */
    public static function getIdentifierTypeNodes(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : array
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return self::getIdentifierTypeNodes($typeNode->type);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            $identifierTypeNodes = [];
            foreach ($typeNode->items as $arrayShapeItemNode) {
                $identifierTypeNodes = \array_merge($identifierTypeNodes, self::getIdentifierTypeNodes($arrayShapeItemNode->valueType));
            }
            return $identifierTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode || $typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            $identifierTypeNodes = [];
            foreach ($typeNode->types as $innerTypeNode) {
                $identifierTypeNodes = \array_merge($identifierTypeNodes, self::getIdentifierTypeNodes($innerTypeNode));
            }
            return $identifierTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            $identifierTypeNodes = self::getIdentifierTypeNodes($typeNode->type);
            foreach ($typeNode->genericTypes as $innerTypeNode) {
                $identifierTypeNodes = \array_merge($identifierTypeNodes, self::getIdentifierTypeNodes($innerTypeNode));
            }
            return $identifierTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode) {
            return self::getIdentifierTypeNodes($typeNode->type);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            $identifierTypeNodes = \array_merge([$typeNode->identifier], self::getIdentifierTypeNodes($typeNode->returnType));
            foreach ($typeNode->parameters as $callableParameterNode) {
                $identifierTypeNodes = \array_merge($identifierTypeNodes, self::getIdentifierTypeNodes($callableParameterNode->type));
            }
            return $identifierTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode) {
            return [];
        }
        /** @var IdentifierTypeNode|ThisTypeNode $typeNode */
        $typeNode = $typeNode;
        return [$typeNode];
    }
    /**
     * @param TypeNode $typeNode
     * @return ConstTypeNode[]
     */
    public static function getConstantTypeNodes(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : array
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return self::getConstantTypeNodes($typeNode->type);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            $constTypeNodes = [];
            foreach ($typeNode->items as $arrayShapeItemNode) {
                $constTypeNodes = \array_merge($constTypeNodes, self::getConstantTypeNodes($arrayShapeItemNode->valueType));
            }
            return $constTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode || $typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            $constTypeNodes = [];
            foreach ($typeNode->types as $innerTypeNode) {
                $constTypeNodes = \array_merge($constTypeNodes, self::getConstantTypeNodes($innerTypeNode));
            }
            return $constTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            $constTypeNodes = [];
            foreach ($typeNode->genericTypes as $innerTypeNode) {
                $constTypeNodes = \array_merge($constTypeNodes, self::getConstantTypeNodes($innerTypeNode));
            }
            return $constTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode) {
            return self::getConstantTypeNodes($typeNode->type);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            $constTypeNodes = self::getConstantTypeNodes($typeNode->returnType);
            foreach ($typeNode->parameters as $callableParameterNode) {
                $constTypeNodes = \array_merge($constTypeNodes, self::getConstantTypeNodes($callableParameterNode->type));
            }
            return $constTypeNodes;
        }
        if (!$typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode) {
            return [];
        }
        return [$typeNode];
    }
    /**
     * @param TypeNode $typeNode
     * @return UnionTypeNode[]
     */
    public static function getUnionTypeNodes(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : array
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode) {
            return [$typeNode];
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode) {
            return self::getUnionTypeNodes($typeNode->type);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return self::getUnionTypeNodes($typeNode->type);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            $unionTypeNodes = [];
            foreach ($typeNode->items as $arrayShapeItemNode) {
                $unionTypeNodes = \array_merge($unionTypeNodes, self::getUnionTypeNodes($arrayShapeItemNode->valueType));
            }
            return $unionTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            $unionTypeNodes = [];
            foreach ($typeNode->types as $innerTypeNode) {
                $unionTypeNodes = \array_merge($unionTypeNodes, self::getUnionTypeNodes($innerTypeNode));
            }
            return $unionTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            $unionTypeNodes = [];
            foreach ($typeNode->genericTypes as $innerTypeNode) {
                $unionTypeNodes = \array_merge($unionTypeNodes, self::getUnionTypeNodes($innerTypeNode));
            }
            return $unionTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            $unionTypeNodes = self::getUnionTypeNodes($typeNode->returnType);
            foreach ($typeNode->parameters as $callableParameterNode) {
                $unionTypeNodes = \array_merge($unionTypeNodes, self::getUnionTypeNodes($callableParameterNode->type));
            }
            return $unionTypeNodes;
        }
        return [];
    }
    /**
     * @param TypeNode $typeNode
     * @return ArrayTypeNode[]
     */
    public static function getArrayTypeNodes(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : array
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return \array_merge([$typeNode], self::getArrayTypeNodes($typeNode->type));
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            $arrayTypeNodes = [];
            foreach ($typeNode->items as $arrayShapeItemNode) {
                $arrayTypeNodes = \array_merge($arrayTypeNodes, self::getArrayTypeNodes($arrayShapeItemNode->valueType));
            }
            return $arrayTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode) {
            return self::getArrayTypeNodes($typeNode->type);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode || $typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            $arrayTypeNodes = [];
            foreach ($typeNode->types as $innerTypeNode) {
                $arrayTypeNodes = \array_merge($arrayTypeNodes, self::getArrayTypeNodes($innerTypeNode));
            }
            return $arrayTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            $arrayTypeNodes = [];
            foreach ($typeNode->genericTypes as $innerTypeNode) {
                $arrayTypeNodes = \array_merge($arrayTypeNodes, self::getArrayTypeNodes($innerTypeNode));
            }
            return $arrayTypeNodes;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            $arrayTypeNodes = self::getArrayTypeNodes($typeNode->returnType);
            foreach ($typeNode->parameters as $callableParameterNode) {
                $arrayTypeNodes = \array_merge($arrayTypeNodes, self::getArrayTypeNodes($callableParameterNode->type));
            }
            return $arrayTypeNodes;
        }
        return [];
    }
    /**
     * @param IdentifierTypeNode|ThisTypeNode $typeNode
     * @return string
     */
    public static function getTypeHintFromNode(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : string
    {
        return $typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode ? (string) $typeNode : $typeNode->name;
    }
    public static function export(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : string
    {
        $exportedTypeNode = \preg_replace(['~\\s*(&|\\|)\\s*~'], '\\1', (string) $typeNode);
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode || $typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            $exportedTypeNode = \substr($exportedTypeNode, 1, -1);
        }
        return $exportedTypeNode;
    }
    public static function change(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $masterTypeNode, \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNodeToChange, \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $changedTypeNode) : \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        if ($masterTypeNode === $typeNodeToChange) {
            return $changedTypeNode;
        }
        if ($masterTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode) {
            $types = [];
            foreach ($masterTypeNode->types as $typeNone) {
                $types[] = self::change($typeNone, $typeNodeToChange, $changedTypeNode);
            }
            return new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode($types);
        }
        if ($masterTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            $types = [];
            foreach ($masterTypeNode->types as $typeNone) {
                $types[] = self::change($typeNone, $typeNodeToChange, $changedTypeNode);
            }
            return new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode($types);
        }
        if ($masterTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            $genericTypes = [];
            foreach ($masterTypeNode->genericTypes as $genericTypeNode) {
                $genericTypes[] = self::change($genericTypeNode, $typeNodeToChange, $changedTypeNode);
            }
            /** @var IdentifierTypeNode $identificatorTypeNode */
            $identificatorTypeNode = self::change($masterTypeNode->type, $typeNodeToChange, $changedTypeNode);
            return new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode($identificatorTypeNode, $genericTypes);
        }
        if ($masterTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode(self::change($masterTypeNode->type, $typeNodeToChange, $changedTypeNode));
        }
        if ($masterTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            $arrayShapeItemNodes = [];
            foreach ($masterTypeNode->items as $arrayShapeItemNode) {
                $arrayShapeItemNodes[] = self::change($arrayShapeItemNode, $typeNodeToChange, $changedTypeNode);
            }
            return new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode($arrayShapeItemNodes);
        }
        if ($masterTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeItemNode) {
            return new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeItemNode($masterTypeNode->keyName, $masterTypeNode->optional, self::change($masterTypeNode->valueType, $typeNodeToChange, $changedTypeNode));
        }
        if ($masterTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode) {
            return new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode(self::change($masterTypeNode->type, $typeNodeToChange, $changedTypeNode));
        }
        if ($masterTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            $callableParameters = [];
            foreach ($masterTypeNode->parameters as $parameterTypeNode) {
                $callableParameters[] = new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeParameterNode(self::change($parameterTypeNode->type, $typeNodeToChange, $changedTypeNode), $parameterTypeNode->isReference, $parameterTypeNode->isVariadic, $parameterTypeNode->parameterName, $parameterTypeNode->isOptional);
            }
            /** @var IdentifierTypeNode $identificatorTypeNode */
            $identificatorTypeNode = self::change($masterTypeNode->identifier, $typeNodeToChange, $changedTypeNode);
            return new \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode($identificatorTypeNode, $callableParameters, self::change($masterTypeNode->returnType, $typeNodeToChange, $changedTypeNode));
        }
        return clone $masterTypeNode;
    }
    /**
     * @param UnionTypeNode|IntersectionTypeNode $typeNode
     * @return bool
     */
    public static function containsNullType(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : bool
    {
        foreach ($typeNode->types as $innerTypeNode) {
            if (!$innerTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode) {
                continue;
            }
            if (\strtolower($innerTypeNode->name) === 'null') {
                return \true;
            }
        }
        return \false;
    }
    public static function containsStaticOrThisType(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : bool
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode) {
            return \strtolower($typeNode->name) === 'static';
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode || $typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            foreach ($typeNode->types as $innerTypeNode) {
                if (self::containsStaticOrThisType($innerTypeNode)) {
                    return \true;
                }
            }
        }
        return \false;
    }
    public static function containsOneType(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : bool
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode) {
            if ($typeNode->constExpr instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprIntegerNode) {
                return \true;
            }
            if ($typeNode->constExpr instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprFloatNode) {
                return \true;
            }
            if ($typeNode->constExpr instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode) {
                return \true;
            }
        }
        return \false;
    }
    public static function containsJustTwoTypes(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : bool
    {
        if (!$typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode && !$typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            return \false;
        }
        return \count($typeNode->types) === 2;
    }
    public static function isCompoundOfNull(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : bool
    {
        if (!self::containsJustTwoTypes($typeNode)) {
            return \false;
        }
        /** @var UnionTypeNode|IntersectionTypeNode $typeNode */
        $typeNode = $typeNode;
        return self::containsNullType($typeNode);
    }
    /**
     * @param TypeNode $typeNode
     * @param File $phpcsFile
     * @param int $pointer
     * @param array<int, string> $traversableTypeHints
     * @return bool
     */
    public static function containsTraversableType(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode, \PHP_CodeSniffer\Files\File $phpcsFile, int $pointer, array $traversableTypeHints) : bool
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode) {
            $fullyQualifiedType = \SlevomatCodingStandard\Helpers\TypeHintHelper::getFullyQualifiedTypeHint($phpcsFile, $pointer, $typeNode->name);
            return \SlevomatCodingStandard\Helpers\TypeHintHelper::isTraversableType($fullyQualifiedType, $traversableTypeHints);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode || $typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            foreach ($typeNode->types as $innerTypeNode) {
                if (self::containsTraversableType($innerTypeNode, $phpcsFile, $pointer, $traversableTypeHints)) {
                    return \true;
                }
            }
        }
        return \false;
    }
    /**
     * @param TypeNode $typeNode
     * @param File $phpcsFile
     * @param int $pointer
     * @param array<int, string> $traversableTypeHints
     * @param bool $inTraversable
     * @return bool
     */
    public static function containsItemsSpecificationForTraversable(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode, \PHP_CodeSniffer\Files\File $phpcsFile, int $pointer, array $traversableTypeHints, bool $inTraversable = \false) : bool
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            foreach ($typeNode->genericTypes as $genericType) {
                if (!self::containsItemsSpecificationForTraversable($genericType, $phpcsFile, $pointer, $traversableTypeHints, \true)) {
                    return \false;
                }
            }
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            foreach ($typeNode->items as $arrayShapeItemNode) {
                if (!self::containsItemsSpecificationForTraversable($arrayShapeItemNode->valueType, $phpcsFile, $pointer, $traversableTypeHints, \true)) {
                    return \false;
                }
            }
            return \true;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\NullableTypeNode) {
            return self::containsItemsSpecificationForTraversable($typeNode->type, $phpcsFile, $pointer, $traversableTypeHints, \true);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode) {
            if (!$inTraversable) {
                return \false;
            }
            return !\SlevomatCodingStandard\Helpers\TypeHintHelper::isTraversableType(\SlevomatCodingStandard\Helpers\TypeHintHelper::getFullyQualifiedTypeHint($phpcsFile, $pointer, $typeNode->name), $traversableTypeHints);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            return $inTraversable;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return self::containsItemsSpecificationForTraversable($typeNode->type, $phpcsFile, $pointer, $traversableTypeHints, \true);
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\UnionTypeNode || $typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IntersectionTypeNode) {
            foreach ($typeNode->types as $innerTypeNode) {
                if (!$inTraversable && $innerTypeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode && \strtolower($innerTypeNode->name) === 'null') {
                    continue;
                }
                if (self::containsItemsSpecificationForTraversable($innerTypeNode, $phpcsFile, $pointer, $traversableTypeHints, $inTraversable)) {
                    return \true;
                }
            }
        }
        return \false;
    }
    /**
     * @param UnionTypeNode|IntersectionTypeNode $typeNode
     * @return TypeNode
     */
    public static function getTypeFromNullableType(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        return $typeNode->types[0] instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode && \strtolower($typeNode->types[0]->name) === 'null' ? $typeNode->types[1] : $typeNode->types[0];
    }
    /**
     * @param CallableTypeNode|GenericTypeNode|IdentifierTypeNode|ThisTypeNode|ArrayTypeNode|ArrayShapeNode|ConstTypeNode $typeNode
     * @return string
     */
    public static function getTypeHintFromOneType(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : string
    {
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode) {
            return $typeNode->type->name;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode) {
            if (\strtolower($typeNode->name) === 'true') {
                return 'bool';
            }
            if (\strtolower($typeNode->name) === 'false') {
                return 'bool';
            }
            if (\in_array(\strtolower($typeNode->name), ['class-string', 'trait-string', 'callable-string', 'numeric-string'], \true)) {
                return 'string';
            }
            return $typeNode->name;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\CallableTypeNode) {
            return $typeNode->identifier->name;
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
            return 'array';
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayShapeNode) {
            return 'array';
        }
        if ($typeNode instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ConstTypeNode) {
            if ($typeNode->constExpr instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprIntegerNode) {
                return 'int';
            }
            if ($typeNode->constExpr instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprFloatNode) {
                return 'float';
            }
            if ($typeNode->constExpr instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprStringNode) {
                return 'string';
            }
        }
        return (string) $typeNode;
    }
    /**
     * @param UnionTypeNode|IntersectionTypeNode $typeNode
     * @param File $phpcsFile
     * @param int $pointer
     * @param array<int, string> $traversableTypeHints
     * @return string|null
     */
    public static function getTraversableTypeHintFromType(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode, \PHP_CodeSniffer\Files\File $phpcsFile, int $pointer, array $traversableTypeHints) : ?string
    {
        $typeHint = null;
        foreach ($typeNode->types as $type) {
            if ($type instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\GenericTypeNode || $type instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ThisTypeNode || $type instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode) {
                $typeHint = self::getTypeHintFromOneType($type);
                break;
            }
        }
        return $typeHint !== null && \SlevomatCodingStandard\Helpers\TypeHintHelper::isTraversableType(\SlevomatCodingStandard\Helpers\TypeHintHelper::getFullyQualifiedTypeHint($phpcsFile, $pointer, $typeHint), $traversableTypeHints) ? $typeHint : null;
    }
    /**
     * @param UnionTypeNode|IntersectionTypeNode $typeNode
     * @return ?TypeNode
     */
    public static function getItemsSpecificationTypeFromType(\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode $typeNode) : ?\_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\TypeNode
    {
        foreach ($typeNode->types as $type) {
            if ($type instanceof \_PhpScoper544eb478a6f6\PHPStan\PhpDocParser\Ast\Type\ArrayTypeNode) {
                return $type;
            }
        }
        return null;
    }
}
