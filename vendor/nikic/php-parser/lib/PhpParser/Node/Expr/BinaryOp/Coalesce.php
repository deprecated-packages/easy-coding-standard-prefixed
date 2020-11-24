<?php

declare (strict_types=1);
namespace _PhpScoperd675aaf00c76\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd675aaf00c76\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScoperd675aaf00c76\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '??';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Coalesce';
    }
}
