<?php

declare (strict_types=1);
namespace _PhpScoper59558822d8c7\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoper59558822d8c7\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper59558822d8c7\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
