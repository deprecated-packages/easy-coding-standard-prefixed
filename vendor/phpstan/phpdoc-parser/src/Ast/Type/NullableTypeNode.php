<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperd675aaf00c76\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperd675aaf00c76\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
