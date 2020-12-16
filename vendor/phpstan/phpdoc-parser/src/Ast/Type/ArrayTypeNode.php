<?php

declare (strict_types=1);
namespace _PhpScoperc75fd40d7a6e\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperc75fd40d7a6e\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperc75fd40d7a6e\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
