<?php

declare (strict_types=1);
namespace _PhpScoper589e8c04a9ef\PHPStan\PhpDocParser\Ast\Type;

use _PhpScoper589e8c04a9ef\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode;
class ConstTypeNode implements \_PhpScoper589e8c04a9ef\PHPStan\PhpDocParser\Ast\Type\TypeNode
{
    /** @var ConstExprNode */
    public $constExpr;
    public function __construct(\_PhpScoper589e8c04a9ef\PHPStan\PhpDocParser\Ast\ConstExpr\ConstExprNode $constExpr)
    {
        $this->constExpr = $constExpr;
    }
    public function __toString() : string
    {
        return $this->constExpr->__toString();
    }
}
