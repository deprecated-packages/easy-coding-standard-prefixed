<?php

declare (strict_types=1);
namespace _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperfab1bfb7ec99\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'and';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalAnd';
    }
}
