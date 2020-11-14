<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr\BinaryOp
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
