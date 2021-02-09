<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper807f8e74693b\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScoper807f8e74693b\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '/';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Div';
    }
}
