<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperea337ed74749\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoperea337ed74749\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'or';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalOr';
    }
}
