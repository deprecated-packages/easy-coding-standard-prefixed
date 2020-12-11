<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc7c7dddc9238\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperc7c7dddc9238\PhpParser\Node\Expr\BinaryOp
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
