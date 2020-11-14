<?php

declare (strict_types=1);
namespace _PhpScoper4936962185e7\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper4936962185e7\PhpParser\Node\Expr\BinaryOp;
class Minus extends \_PhpScoper4936962185e7\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '-';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Minus';
    }
}
