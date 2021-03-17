<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487\PhpParser\Node\Expr\BinaryOp;

use _PhpScopera3425146d487\PhpParser\Node\Expr\BinaryOp;
class Equal extends \_PhpScopera3425146d487\PhpParser\Node\Expr\BinaryOp
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
