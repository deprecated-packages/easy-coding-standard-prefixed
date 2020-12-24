<?php

declare (strict_types=1);
namespace _PhpScopere106f9fd4493\PhpParser\Node\Expr\BinaryOp;

use _PhpScopere106f9fd4493\PhpParser\Node\Expr\BinaryOp;
class Minus extends \_PhpScopere106f9fd4493\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '-';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Minus';
    }
}
