<?php

declare (strict_types=1);
namespace _PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper8b97b0dd6f5b\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
