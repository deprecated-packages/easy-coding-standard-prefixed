<?php

declare (strict_types=1);
namespace _PhpScoper5ca2d8bcb02c\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper5ca2d8bcb02c\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoper5ca2d8bcb02c\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'xor';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalXor';
    }
}
