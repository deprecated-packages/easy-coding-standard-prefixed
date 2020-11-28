<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfcce67077a55\PhpParser\Node\Expr\BinaryOp;
class LogicalAnd extends \_PhpScoperfcce67077a55\PhpParser\Node\Expr\BinaryOp
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
