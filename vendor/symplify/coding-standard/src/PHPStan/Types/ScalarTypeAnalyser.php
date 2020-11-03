<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\Types;

use _PhpScoper2b44cb0c30af\PHPStan\Type\ArrayType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\BooleanType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\FloatType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\IntegerType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\NullType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\StringType;
use _PhpScoper2b44cb0c30af\PHPStan\Type\Type;
use _PhpScoper2b44cb0c30af\PHPStan\Type\UnionType;
final class ScalarTypeAnalyser
{
    public function isScalarOrArrayType(\_PhpScoper2b44cb0c30af\PHPStan\Type\Type $type) : bool
    {
        if ($type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\StringType) {
            return \true;
        }
        if ($type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\FloatType) {
            return \true;
        }
        if ($type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\BooleanType) {
            return \true;
        }
        if ($type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\IntegerType) {
            return \true;
        }
        if ($type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\ArrayType) {
            return $this->isScalarOrArrayType($type->getItemType());
        }
        return $this->isNullableScalarType($type);
    }
    private function isNullableScalarType(\_PhpScoper2b44cb0c30af\PHPStan\Type\Type $type) : bool
    {
        if (!$type instanceof \_PhpScoper2b44cb0c30af\PHPStan\Type\UnionType) {
            return \false;
        }
        if (\count($type->getTypes()) !== 2) {
            return \false;
        }
        $nullSuperTypeTrinaryLogic = $type->isSuperTypeOf(new \_PhpScoper2b44cb0c30af\PHPStan\Type\NullType());
        if (!$nullSuperTypeTrinaryLogic->yes()) {
            return \false;
        }
        $unionedTypes = $type->getTypes();
        foreach ($unionedTypes as $unionedType) {
            if ($this->isScalarOrArrayType($unionedType)) {
                return \true;
            }
        }
        return \false;
    }
}
