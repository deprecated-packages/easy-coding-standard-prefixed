<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperfa7254c25e18\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperfa7254c25e18\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
