<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperecb978830f1e\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperecb978830f1e\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
