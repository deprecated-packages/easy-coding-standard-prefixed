<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd9c3b46af121\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScoperd9c3b46af121\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '/';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Div';
    }
}
