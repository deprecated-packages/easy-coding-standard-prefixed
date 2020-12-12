<?php

declare (strict_types=1);
namespace _PhpScoper11a6395266c4\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoper11a6395266c4\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper11a6395266c4\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
