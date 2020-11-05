<?php

declare (strict_types=1);
namespace _PhpScoperdebd9d705540\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperdebd9d705540\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperdebd9d705540\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
