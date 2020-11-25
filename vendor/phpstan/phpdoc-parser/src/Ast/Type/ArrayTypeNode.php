<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperca8ca183ac38\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperca8ca183ac38\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
