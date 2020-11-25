<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperaac5f7c652e4\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
