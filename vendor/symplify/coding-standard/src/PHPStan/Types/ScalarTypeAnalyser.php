<?php

declare (strict_types=1);
namespace Symplify\CodingStandard\PHPStan\Types;

use _PhpScoper8de082cbb8c7\PHPStan\Type\ArrayType;
use _PhpScoper8de082cbb8c7\PHPStan\Type\BooleanType;
use _PhpScoper8de082cbb8c7\PHPStan\Type\FloatType;
use _PhpScoper8de082cbb8c7\PHPStan\Type\IntegerType;
use _PhpScoper8de082cbb8c7\PHPStan\Type\NullType;
use _PhpScoper8de082cbb8c7\PHPStan\Type\StringType;
use _PhpScoper8de082cbb8c7\PHPStan\Type\Type;
use _PhpScoper8de082cbb8c7\PHPStan\Type\UnionType;
final class ScalarTypeAnalyser
{
    public function isScalarOrArrayType(\_PhpScoper8de082cbb8c7\PHPStan\Type\Type $type) : bool
    {
        if ($type instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\StringType) {
            return \true;
        }
        if ($type instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\FloatType) {
            return \true;
        }
        if ($type instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\BooleanType) {
            return \true;
        }
        if ($type instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\IntegerType) {
            return \true;
        }
        if ($type instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\ArrayType) {
            return $this->isScalarOrArrayType($type->getItemType());
        }
        return $this->isNullableScalarType($type);
    }
    private function isNullableScalarType(\_PhpScoper8de082cbb8c7\PHPStan\Type\Type $type) : bool
    {
        if (!$type instanceof \_PhpScoper8de082cbb8c7\PHPStan\Type\UnionType) {
            return \false;
        }
        if (\count($type->getTypes()) !== 2) {
            return \false;
        }
        $nullSuperTypeTrinaryLogic = $type->isSuperTypeOf(new \_PhpScoper8de082cbb8c7\PHPStan\Type\NullType());
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
