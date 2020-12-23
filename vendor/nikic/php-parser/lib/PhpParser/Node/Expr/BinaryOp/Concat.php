<?php

declare (strict_types=1);
namespace _PhpScoperd9fcac9e904f\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd9fcac9e904f\PhpParser\Node\Expr\BinaryOp;
class Concat extends \_PhpScoperd9fcac9e904f\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '.';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Concat';
    }
}
