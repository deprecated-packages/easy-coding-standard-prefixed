<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407\PhpParser\Node\Expr\BinaryOp;

use _PhpScopereb8678af2407\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScopereb8678af2407\PhpParser\Node\Expr\BinaryOp
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
