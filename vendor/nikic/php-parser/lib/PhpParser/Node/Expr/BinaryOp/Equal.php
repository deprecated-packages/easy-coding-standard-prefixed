<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\BinaryOp;
class Equal extends \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '==';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Equal';
    }
}
