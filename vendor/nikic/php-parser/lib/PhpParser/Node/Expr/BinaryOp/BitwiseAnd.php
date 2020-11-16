<?php

declare (strict_types=1);
namespace _PhpScoper4d05106cc3c0\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper4d05106cc3c0\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends \_PhpScoper4d05106cc3c0\PhpParser\Node\Expr\BinaryOp
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
