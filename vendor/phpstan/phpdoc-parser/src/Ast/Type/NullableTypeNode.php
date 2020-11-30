<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScopera09818bc50da\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScopera09818bc50da\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
