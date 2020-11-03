<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\Types;

use _PhpScoper2b44cb0c30af\PhpParser\Node\Expr;
use _PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope;
use _PhpScoper2b44cb0c30af\PHPStan\Type\ArrayType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\IntersectionType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\Type;
use _PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName;
use _PhpScoper2b44cb0c30af\PHPStan\Type\UnionType;
final class ContainsTypeAnalyser
{
    /**
     * @param class-string[] $types
     */
    public function containsExprTypes(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr $expr, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, array $types) : bool
    {
        foreach ($types as $type) {
            if (!$this->containsExprType($expr, $scope, $type)) {
                continue;
            }
            return \true;
        }
        return \false;
    }
    private function containsExprType(\_PhpScoper2b44cb0c30af\PhpParser\Node\Expr $expr, \_PhpScoper2b44cb0c30af\PHPStan\Analyser\Scope $scope, string $type) : bool
    {
        $exprType = $scope->getType($expr);
        if ($exprType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\IntersectionType) {
            $intersectionedTypes = $exprType->getTypes();
            foreach ($intersectionedTypes as $intersectionedType) {
                if ($this->isExprTypeOfType($intersectionedType, $type)) {
                    return \true;
                }
            }
        }
        return $this->isExprTypeOfType($exprType, $type);
    }
    private function isUnionTypeWithClass(\_PhpScoper2b44cb0c30af\PHPStan\Type\Type $type, string $class) : bool
    {
        if (!$type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\UnionType) {
            return \false;
        }
        $unionedTypes = $type->getTypes();
        foreach ($unionedTypes as $unionedType) {
            if (!$unionedType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName) {
                continue;
            }
            if (\is_a($unionedType->getClassName(), $class, \true)) {
                return \true;
            }
        }
        return \false;
    }
    private function isArrayWithItemType(\_PhpScoper2b44cb0c30af\PHPStan\Type\Type $propertyType, string $type) : bool
    {
        if (!$propertyType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\ArrayType) {
            return \false;
        }
        $arrayItemType = $propertyType->getItemType();
        if (!$arrayItemType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName) {
            return \false;
        }
        return \is_a($arrayItemType->getClassName(), $type, \true);
    }
    private function isExprTypeOfType($exprType, string $type) : bool
    {
        if ($exprType instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\TypeWithClassName) {
            return \is_a($exprType->getClassName(), $type, \true);
        }
        if ($this->isUnionTypeWithClass($exprType, $type)) {
            return \true;
        }
        return $this->isArrayWithItemType($exprType, $type);
    }
}
