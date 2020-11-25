<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\BinaryOp;
class BooleanAnd extends \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '&&';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BooleanAnd';
    }
}
