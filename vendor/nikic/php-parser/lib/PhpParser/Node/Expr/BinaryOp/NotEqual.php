<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperfa7254c25e18\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoperfa7254c25e18\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '!=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_NotEqual';
    }
}
