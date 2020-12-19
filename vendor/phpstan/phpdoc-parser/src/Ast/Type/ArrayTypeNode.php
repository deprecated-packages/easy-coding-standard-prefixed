<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperfb2c402b972b\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperfb2c402b972b\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
