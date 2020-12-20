<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperba24099fc6fd\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperba24099fc6fd\PhpParser\Node\Expr\BinaryOp
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
