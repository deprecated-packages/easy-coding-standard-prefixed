<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperb09c3ec8e01a\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperb09c3ec8e01a\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
