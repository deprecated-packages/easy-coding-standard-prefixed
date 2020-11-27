<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper578a67c80b2b\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper578a67c80b2b\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
