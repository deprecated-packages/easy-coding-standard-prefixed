<?php

declare (strict_types=1);
namespace _PhpScopera23ebff5477f\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScopera23ebff5477f\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScopera23ebff5477f\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
