<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\ConstExpr;

class ConstExprFloatNode implements \_PhpScoperba24099fc6fd\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode
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
