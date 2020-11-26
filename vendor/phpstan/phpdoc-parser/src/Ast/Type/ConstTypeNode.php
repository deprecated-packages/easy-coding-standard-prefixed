<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperb2e2c0c42e71\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperb2e2c0c42e71\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperb2e2c0c42e71\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
