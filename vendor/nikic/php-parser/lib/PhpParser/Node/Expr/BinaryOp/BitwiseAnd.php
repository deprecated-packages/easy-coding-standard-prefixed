<?php

declare (strict_types=1);
namespace _PhpScoper833c56a97273\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper833c56a97273\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends \_PhpScoper833c56a97273\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '&';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseAnd';
    }
}
