<?php

declare (strict_types=1);
namespace _PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\BinaryOp;
class BitwiseXor extends \_PhpScoper6c2f17c43d2d\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '^';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseXor';
    }
}
