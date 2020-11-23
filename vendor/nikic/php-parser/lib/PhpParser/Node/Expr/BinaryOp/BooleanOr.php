<?php

declare (strict_types=1);
namespace _PhpScoper7b8580219c59\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper7b8580219c59\PhpParser\Node\Expr\BinaryOp;
class BooleanOr extends \_PhpScoper7b8580219c59\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '||';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BooleanOr';
    }
}
