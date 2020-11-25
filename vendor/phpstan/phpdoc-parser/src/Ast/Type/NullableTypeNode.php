<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperd301db66c80c\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperd301db66c80c\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
