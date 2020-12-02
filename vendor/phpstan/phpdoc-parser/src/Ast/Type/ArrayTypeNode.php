<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper6a0a7eb6e565\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
