<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc64a4ac1af35\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperc64a4ac1af35\PhpParser\Node\Expr\BinaryOp
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
