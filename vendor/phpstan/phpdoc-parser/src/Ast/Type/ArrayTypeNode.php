<?php

declare (strict_types=1);
namespace _PhpScoperd74b3ed28382\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperd74b3ed28382\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperd74b3ed28382\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
