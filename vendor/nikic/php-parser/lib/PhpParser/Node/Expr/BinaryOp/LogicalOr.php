<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper8e2d8a2760d1\PhpParser\Node\Expr\BinaryOp
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
