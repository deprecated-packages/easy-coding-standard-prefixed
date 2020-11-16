<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper239b374a39c8\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends \_PhpScoper239b374a39c8\PhpParser\Node\Expr\BinaryOp
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
