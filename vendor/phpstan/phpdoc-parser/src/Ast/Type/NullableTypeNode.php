<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
