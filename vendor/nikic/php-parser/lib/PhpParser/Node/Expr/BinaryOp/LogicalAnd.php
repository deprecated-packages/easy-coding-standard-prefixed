<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd4937ee9b515\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperd4937ee9b515\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'and';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalAnd';
    }
}
