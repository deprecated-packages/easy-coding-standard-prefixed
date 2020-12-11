<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperea337ed74749\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends \_PhpScoperea337ed74749\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '&';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseAnd';
    }
}
