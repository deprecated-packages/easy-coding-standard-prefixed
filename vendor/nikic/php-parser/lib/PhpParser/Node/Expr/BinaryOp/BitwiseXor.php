<?php

declare (strict_types=1);
namespace _PhpScoper2f75f00bf6fa\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper2f75f00bf6fa\PhpParser\Node\Expr\BinaryOp;
class BitwiseXor extends \_PhpScoper2f75f00bf6fa\PhpParser\Node\Expr\BinaryOp
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
