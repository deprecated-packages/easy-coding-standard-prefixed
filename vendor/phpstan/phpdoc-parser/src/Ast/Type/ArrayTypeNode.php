<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScopera749ac204cd2\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScopera749ac204cd2\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
