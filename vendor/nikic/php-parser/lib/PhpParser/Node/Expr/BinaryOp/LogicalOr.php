<?php

declare (strict_types=1);
namespace _PhpScoper833c56a97273\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper833c56a97273\PhpParser\Node\Expr\BinaryOp;
class LogicalOr extends \_PhpScoper833c56a97273\PhpParser\Node\Expr\BinaryOp
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
