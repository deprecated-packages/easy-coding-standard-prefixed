<?php

declare (strict_types=1);
namespace _PhpScoperbd5fb781fe24\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperbd5fb781fe24\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperbd5fb781fe24\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperbd5fb781fe24\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
