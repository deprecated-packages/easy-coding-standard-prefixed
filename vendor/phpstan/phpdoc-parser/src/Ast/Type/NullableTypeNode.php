<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper4298f97f3cb3\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
