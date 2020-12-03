<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperba5852cc6147\PhpParser\Node\Expr\BinaryOp;
class ShiftLeft extends \_PhpScoperba5852cc6147\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<<';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_ShiftLeft';
    }
}
