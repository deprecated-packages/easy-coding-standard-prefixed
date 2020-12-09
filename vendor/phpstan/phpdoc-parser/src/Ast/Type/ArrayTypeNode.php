<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperf65af7a6d9a0\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperf65af7a6d9a0\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
