<?php

declare (strict_types=1);
namespace _PhpScoper6250f8d25076\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper6250f8d25076\PhpParser\Node\Expr\BinaryOp;
class BitwiseXor extends \_PhpScoper6250f8d25076\PhpParser\Node\Expr\BinaryOp
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
