<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\BinaryOp
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
