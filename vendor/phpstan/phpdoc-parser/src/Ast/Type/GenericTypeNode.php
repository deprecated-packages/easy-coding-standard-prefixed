<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PHPStan\PhpDocParser\Ast\Type;

class GenericTypeNode implements \_PhpScoperfd70a7e8e84f\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var IdentifierTypeNode */
    public $type;
    /** @var TypeNode[] */
    public $genericTypes;
    public function __construct(\_PhpScoperfd70a7e8e84f\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode $type, array $genericTypes)
    {
        $this->type = $type;
        $this->genericTypes = $genericTypes;
    }
    public function __toString() : string
    {
        return $this->type . '<' . \implode(', ', $this->genericTypes) . '>';
    }
}
