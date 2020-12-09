<?php

declare (strict_types=1);
namespace _PhpScoperf65af7a6d9a0\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperf65af7a6d9a0\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperf65af7a6d9a0\PhpParser\Node\Expr\BinaryOp
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
