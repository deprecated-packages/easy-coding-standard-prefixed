<?php

declare (strict_types=1);
namespace _PhpScoper589e8c04a9ef\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper589e8c04a9ef\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper589e8c04a9ef\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
