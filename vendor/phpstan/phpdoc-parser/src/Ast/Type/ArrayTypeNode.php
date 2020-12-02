<?php

declare (strict_types=1);
namespace _PhpScoper2d2a405cc0f8\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper2d2a405cc0f8\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper2d2a405cc0f8\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
