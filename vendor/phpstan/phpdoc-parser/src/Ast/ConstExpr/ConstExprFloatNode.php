<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprFloatNode implements \_PhpScoperc64a4ac1af35\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
{
    /** @var string */
    public $value;
    public function __construct(string $value)
    {
        $this->value = $value;
    }
    public function __toString() : string
    {
        return $this->value;
    }
}
