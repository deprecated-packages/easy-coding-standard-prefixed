<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera8f555a7493c\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScopera8f555a7493c\PhpParser\Node\Expr\BinaryOp
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
