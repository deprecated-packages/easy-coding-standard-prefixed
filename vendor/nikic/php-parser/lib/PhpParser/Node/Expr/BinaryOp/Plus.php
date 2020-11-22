<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfacc742d2745\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoperfacc742d2745\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '+';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Plus';
    }
}
