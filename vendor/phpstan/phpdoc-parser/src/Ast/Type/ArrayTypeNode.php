<?php

declare (strict_types=1);
namespace _PhpScoperfabf55fef6b7\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperfabf55fef6b7\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperfabf55fef6b7\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
