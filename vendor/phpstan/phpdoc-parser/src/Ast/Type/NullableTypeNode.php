<?php

declare (strict_types=1);
namespace _PhpScoperd79d87c3336e\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperd79d87c3336e\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperd79d87c3336e\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
