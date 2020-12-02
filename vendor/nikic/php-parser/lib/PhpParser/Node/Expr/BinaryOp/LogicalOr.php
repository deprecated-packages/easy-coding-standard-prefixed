<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper6a0a7eb6e565\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper6a0a7eb6e565\PhpParser\Node\Expr\BinaryOp
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
