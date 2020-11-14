<?php

declare (strict_types=1);
namespace _PhpScoper4936962185e7\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper4936962185e7\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper4936962185e7\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
