<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera1f11cc38772\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScopera1f11cc38772\PhpParser\Node\Expr\BinaryOp
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
