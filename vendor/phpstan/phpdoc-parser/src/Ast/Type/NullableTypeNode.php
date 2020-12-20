<?php

declare (strict_types=1);
namespace _PhpScoper7574e8786845\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoper7574e8786845\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper7574e8786845\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
