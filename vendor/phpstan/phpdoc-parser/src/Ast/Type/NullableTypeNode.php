<?php

declare (strict_types=1);
namespace _PhpScoper78af57a363a0\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoper78af57a363a0\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper78af57a363a0\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
