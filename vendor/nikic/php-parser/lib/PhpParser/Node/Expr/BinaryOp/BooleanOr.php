<?php

declare (strict_types=1);
namespace _PhpScoper8b97b0dd6f5b\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8b97b0dd6f5b\PhpParser\Node\Expr\BinaryOp;
class BooleanOr extends \_PhpScoper8b97b0dd6f5b\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '||';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BooleanOr';
    }
}
