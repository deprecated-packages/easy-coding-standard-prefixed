<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScopera4fc793dae73\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScopera4fc793dae73\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
