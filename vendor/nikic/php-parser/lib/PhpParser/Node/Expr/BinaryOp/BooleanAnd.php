<?php

declare (strict_types=1);
namespace _PhpScopercf909b66eba8\PhpParser\Node\Expr\BinaryOp;

use _PhpScopercf909b66eba8\PhpParser\Node\Expr\BinaryOp;
class BooleanAnd extends \_PhpScopercf909b66eba8\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '&&';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BooleanAnd';
    }
}
