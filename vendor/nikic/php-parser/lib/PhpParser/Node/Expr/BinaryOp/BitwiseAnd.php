<?php

declare (strict_types=1);
namespace _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8de082cbb8c7\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends \_PhpScoper8de082cbb8c7\PhpParser\Node\Expr\BinaryOp
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
