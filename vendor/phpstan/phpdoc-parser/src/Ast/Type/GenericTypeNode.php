<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PHPStan\PhpDocParser\Ast\Type;

class GenericTypeNode implements \_PhpScoperaba240c3d5f1\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var IdentifierTypeNode */
    public $type;
    /** @var TypeNode[] */
    public $genericTypes;
    public function __construct(\_PhpScoperaba240c3d5f1\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode $type, array $genericTypes)
    {
        $this->type = $type;
        $this->genericTypes = $genericTypes;
    }
    public function __toString() : string
    {
        return $this->type . '<' . \implode(', ', $this->genericTypes) . '>';
    }
}
