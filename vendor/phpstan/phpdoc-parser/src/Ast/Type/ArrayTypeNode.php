<?php

declare (strict_types=1);
namespace _PhpScoper3a22e8e0bd94\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper3a22e8e0bd94\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper3a22e8e0bd94\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
