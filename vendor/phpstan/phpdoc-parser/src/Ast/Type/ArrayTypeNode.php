<?php

declare (strict_types=1);
namespace _PhpScoperdf6a0b341030\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperdf6a0b341030\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperdf6a0b341030\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
