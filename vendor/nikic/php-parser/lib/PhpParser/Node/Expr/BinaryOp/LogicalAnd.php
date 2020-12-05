<?php

declare (strict_types=1);
namespace _PhpScoperaba240c3d5f1\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperaba240c3d5f1\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperaba240c3d5f1\PhpParser\Node\Expr\BinaryOp
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
