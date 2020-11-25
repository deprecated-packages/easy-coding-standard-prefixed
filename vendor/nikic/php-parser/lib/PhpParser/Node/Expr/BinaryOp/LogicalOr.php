<?php

declare (strict_types=1);
namespace _PhpScoper38a7d00685f8\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper38a7d00685f8\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper38a7d00685f8\PhpParser\Node\Expr\BinaryOp
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
