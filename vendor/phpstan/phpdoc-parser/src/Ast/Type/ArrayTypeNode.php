<?php

declare (strict_types=1);
namespace _PhpScoper13160cf3462c\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper13160cf3462c\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper13160cf3462c\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
