<?php

declare (strict_types=1);
namespace _PhpScopere015d8a3273c\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScopere015d8a3273c\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScopere015d8a3273c\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
