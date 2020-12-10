<?php

declare (strict_types=1);
namespace _PhpScoper8dd2e1c340b1\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8dd2e1c340b1\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoper8dd2e1c340b1\PhpParser\Node\Expr\BinaryOp
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
