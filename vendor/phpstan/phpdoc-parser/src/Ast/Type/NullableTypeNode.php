<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperf77bffce0320\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperf77bffce0320\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
