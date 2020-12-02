<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperc95ae4bf942a\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperc95ae4bf942a\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
