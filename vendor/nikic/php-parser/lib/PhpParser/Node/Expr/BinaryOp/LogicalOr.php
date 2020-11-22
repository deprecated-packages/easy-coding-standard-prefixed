<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper5ade29b97028\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper5ade29b97028\PhpParser\Node\Expr\BinaryOp
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
