<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperb730595bc9f4\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperb730595bc9f4\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
