<?php

declare (strict_types=1);
namespace _PhpScoper78af57a363a0\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper78af57a363a0\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoper78af57a363a0\PhpParser\Node\Expr\BinaryOp
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
