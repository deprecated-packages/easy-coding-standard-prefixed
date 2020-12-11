<?php

declare (strict_types=1);
namespace _PhpScoper23ef26a4fb01\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper23ef26a4fb01\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper23ef26a4fb01\PhpParser\Node\Expr\BinaryOp
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
