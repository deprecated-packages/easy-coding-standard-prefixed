<?php

declare (strict_types=1);
namespace _PhpScoper47644ab3aa9a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper47644ab3aa9a\PhpParser\Node\Expr\BinaryOp;
class Mod extends \_PhpScoper47644ab3aa9a\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '%';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Mod';
    }
}
