<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr\BinaryOp
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
