<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera189153e1f79\PhpParser\Node\Expr\BinaryOp;
class Smaller extends \_PhpScopera189153e1f79\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Smaller';
    }
}
