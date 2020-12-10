<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera40fc53e636b\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScopera40fc53e636b\PhpParser\Node\Expr\BinaryOp
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
