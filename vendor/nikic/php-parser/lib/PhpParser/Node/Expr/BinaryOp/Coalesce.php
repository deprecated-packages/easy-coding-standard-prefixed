<?php

declare (strict_types=1);
namespace _PhpScoper0270f1d35181\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper0270f1d35181\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScoper0270f1d35181\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '??';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Coalesce';
    }
}
