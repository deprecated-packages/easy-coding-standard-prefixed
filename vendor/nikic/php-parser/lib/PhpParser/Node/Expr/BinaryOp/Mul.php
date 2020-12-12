<?php

declare (strict_types=1);
namespace _PhpScoperdaf95aff095b\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperdaf95aff095b\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScoperdaf95aff095b\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '*';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Mul';
    }
}
