<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperf361a7d70552\PhpParser\Node\Expr\BinaryOp;
class BooleanOr extends \_PhpScoperf361a7d70552\PhpParser\Node\Expr\BinaryOp
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
