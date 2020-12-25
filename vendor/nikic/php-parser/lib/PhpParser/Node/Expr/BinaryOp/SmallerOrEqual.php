<?php

declare (strict_types=1);
namespace _PhpScoper745103eaabcd\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper745103eaabcd\PhpParser\Node\Expr\BinaryOp;
class SmallerOrEqual extends \_PhpScoper745103eaabcd\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_SmallerOrEqual';
    }
}
