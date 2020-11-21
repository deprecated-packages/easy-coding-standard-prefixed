<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScopera4be459e5e3d\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScopera4be459e5e3d\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
