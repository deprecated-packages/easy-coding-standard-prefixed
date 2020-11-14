<?php

declare (strict_types=1);
namespace _PhpScoper4936962185e7\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper4936962185e7\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper4936962185e7\PhpParser\Node\Expr\BinaryOp
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
