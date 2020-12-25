<?php

declare (strict_types=1);
namespace _PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperc8fea59b0cb1\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
