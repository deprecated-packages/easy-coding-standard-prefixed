<?php

declare (strict_types=1);
namespace _PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperb383f16e851e\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}