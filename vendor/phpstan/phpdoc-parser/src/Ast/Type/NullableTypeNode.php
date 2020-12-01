<?php

declare (strict_types=1);
namespace _PhpScoperb36402634947\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperb36402634947\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperb36402634947\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
