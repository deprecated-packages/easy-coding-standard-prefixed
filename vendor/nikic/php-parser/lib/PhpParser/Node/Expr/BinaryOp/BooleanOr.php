<?php

declare (strict_types=1);
namespace _PhpScoperaac5f7c652e4\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperaac5f7c652e4\PhpParser\Node\Expr\BinaryOp;
class BooleanOr extends \_PhpScoperaac5f7c652e4\PhpParser\Node\Expr\BinaryOp
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
