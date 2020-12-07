<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperb73f9e44f4eb\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperb73f9e44f4eb\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
