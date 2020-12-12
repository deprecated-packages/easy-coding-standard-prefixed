<?php

declare (strict_types=1);
namespace _PhpScoper326bba7310a2\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoper326bba7310a2\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper326bba7310a2\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
