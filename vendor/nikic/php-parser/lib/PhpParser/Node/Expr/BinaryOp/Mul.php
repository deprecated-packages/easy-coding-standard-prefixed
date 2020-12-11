<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera061b8a47e36\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScopera061b8a47e36\PhpParser\Node\Expr\BinaryOp
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
