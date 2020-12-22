<?php

declare (strict_types=1);
namespace _PhpScoper57272265e1c9\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper57272265e1c9\PhpParser\Node\Expr\BinaryOp;
class BitwiseXor extends \_PhpScoper57272265e1c9\PhpParser\Node\Expr\BinaryOp
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
