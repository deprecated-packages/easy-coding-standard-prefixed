<?php

declare (strict_types=1);
namespace _PhpScoperf3f1be0d8a30\PHPStan\PhpDocParser\Ast\Type;

class NullableTypeNode implements \_PhpScoperf3f1be0d8a30\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperf3f1be0d8a30\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return '?' . $this->type;
    }
}
