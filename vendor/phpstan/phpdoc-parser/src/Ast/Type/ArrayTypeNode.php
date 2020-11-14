<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperd4937ee9b515\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperd4937ee9b515\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
