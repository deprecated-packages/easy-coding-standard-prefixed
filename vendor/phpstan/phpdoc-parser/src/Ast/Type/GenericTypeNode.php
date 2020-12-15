<?php

declare (strict_types=1);
namespace _PhpScoper6a1dd9b8a650\PHPStan\PhpDocParser\Ast\Type;

class GenericTypeNode implements \_PhpScoper6a1dd9b8a650\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var IdentifierTypeNode */
    public $type;
    /** @var TypeNode[] */
    public $genericTypes;
    public function __construct(\_PhpScoper6a1dd9b8a650\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode $type, array $genericTypes)
    {
        $this->type = $type;
        $this->genericTypes = $genericTypes;
    }
    public function __toString() : string
    {
        return $this->type . '<' . \implode(', ', $this->genericTypes) . '>';
    }
}
