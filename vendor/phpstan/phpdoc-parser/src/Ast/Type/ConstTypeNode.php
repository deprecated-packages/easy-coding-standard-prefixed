<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperddde3ba4aebc\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperddde3ba4aebc\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperddde3ba4aebc\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
