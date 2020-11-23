<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd4c5032f0671\PhpParser\Node\Expr\BinaryOp;
class Mul extends \_PhpScoperd4c5032f0671\PhpParser\Node\Expr\BinaryOp
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
