<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PHPStan\PhpDocParser\Ast\Type;

class ArrayTypeNode implements \_PhpScoperdaf95aff095b\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var TypeNode */
    public $type;
    public function __construct(\_PhpScoperdaf95aff095b\PHPStan\PhpDocParser\Ast\Type\TypeNode $type)
    {
        $this->type = $type;
    }
    public function __toString() : string
    {
        return $this->type . '[]';
    }
}
