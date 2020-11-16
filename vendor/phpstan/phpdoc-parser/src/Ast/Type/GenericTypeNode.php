<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\PHPStan\PhpDocParser\Ast\Type;

class GenericTypeNode implements \_PhpScoper8e2d8a2760d1\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var IdentifierTypeNode */
    public $type;
    /** @var TypeNode[] */
    public $genericTypes;
    public function __construct(\_PhpScoper8e2d8a2760d1\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode $type, array $genericTypes)
    {
        $this->type = $type;
        $this->genericTypes = $genericTypes;
    }
    public function __toString() : string
    {
        return $this->type . '<' . \implode(', ', $this->genericTypes) . '>';
    }
}
