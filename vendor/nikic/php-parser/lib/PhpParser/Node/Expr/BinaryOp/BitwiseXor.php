<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper3fa05b4669af\PhpParser\Node\Expr\BinaryOp;
class BitwiseXor extends \_PhpScoper3fa05b4669af\PhpParser\Node\Expr\BinaryOp
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
