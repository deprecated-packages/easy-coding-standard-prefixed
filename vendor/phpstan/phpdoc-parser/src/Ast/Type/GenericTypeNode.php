<?php

declare (strict_types=1);
namespace _PhpScoper4cd05b62e9f1\PHPStan\PhpDocParser\Ast\Type;

class GenericTypeNode implements \_PhpScoper4cd05b62e9f1\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var IdentifierTypeNode */
    public $type;
    /** @var TypeNode[] */
    public $genericTypes;
    public function __construct(\_PhpScoper4cd05b62e9f1\PHPStan\PhpDocParser\Ast\Type\IdentifierTypeNode $type, array $genericTypes)
    {
        $this->type = $type;
        $this->genericTypes = $genericTypes;
    }
    public function __toString() : string
    {
        return $this->type . '<' . \implode(', ', $this->genericTypes) . '>';
    }
}
