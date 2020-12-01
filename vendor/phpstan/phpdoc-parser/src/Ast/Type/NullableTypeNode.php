<?php

declare (strict_types=1);
namespace _PhpScoper6dbb854503f8\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoper6dbb854503f8\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper6dbb854503f8\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
