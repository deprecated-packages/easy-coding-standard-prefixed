<?php

declare (strict_types=1);
namespace _PhpScoperd35c27cd4b09\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperd35c27cd4b09\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperd35c27cd4b09\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
