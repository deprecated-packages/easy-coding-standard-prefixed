<?php

declare (strict_types=1);
namespace _PhpScopere341acab57d4\PhpParser\Node\Expr\BinaryOp;

use _PhpScopere341acab57d4\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScopere341acab57d4\PhpParser\Node\Expr\BinaryOp
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
