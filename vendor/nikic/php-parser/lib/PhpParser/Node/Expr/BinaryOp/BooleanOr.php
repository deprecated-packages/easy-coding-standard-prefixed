<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperdf15f2b748e9\PhpParser\Node\Expr\BinaryOp;
class BooleanOr extends \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr\BinaryOp
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
