<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperad4605bb9267\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperad4605bb9267\PhpParser\Node\Expr\BinaryOp
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
