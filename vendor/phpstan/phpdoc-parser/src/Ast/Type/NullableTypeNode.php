<?php

declare (strict_types=1);
namespace _PhpScoper75713bc3e278\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoper75713bc3e278\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper75713bc3e278\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
