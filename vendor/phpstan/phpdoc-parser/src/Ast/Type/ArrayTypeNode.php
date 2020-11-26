<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoper4a718ec9156e\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoper4a718ec9156e\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
