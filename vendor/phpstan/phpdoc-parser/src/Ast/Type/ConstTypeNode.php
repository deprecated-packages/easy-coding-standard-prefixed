<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoperc95ae4bf942a\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoperc95ae4bf942a\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoperc95ae4bf942a\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
