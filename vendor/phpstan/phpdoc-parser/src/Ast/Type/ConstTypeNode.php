<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper21c6ce8bfe5d\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper21c6ce8bfe5d\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper21c6ce8bfe5d\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
