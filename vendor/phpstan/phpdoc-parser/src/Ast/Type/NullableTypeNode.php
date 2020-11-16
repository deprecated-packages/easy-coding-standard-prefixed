<?php

declare (strict_types=1);
namespace _PhpScoperbcc0395698f8\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperbcc0395698f8\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperbcc0395698f8\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
