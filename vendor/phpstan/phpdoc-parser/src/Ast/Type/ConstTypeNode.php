<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperb6a8e65b492c\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
