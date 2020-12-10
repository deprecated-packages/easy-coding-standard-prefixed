<?php

declare (strict_types=1);
namespace _PhpScoper6250f8d25076\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper6250f8d25076\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoper6250f8d25076\PhpParser\Node\Expr\BinaryOp
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
