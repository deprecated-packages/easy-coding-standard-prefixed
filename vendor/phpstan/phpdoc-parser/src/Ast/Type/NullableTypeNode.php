<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperc5bee3a837bb\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperc5bee3a837bb\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
