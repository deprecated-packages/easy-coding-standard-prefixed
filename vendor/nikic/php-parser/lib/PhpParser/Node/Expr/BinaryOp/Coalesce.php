<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper4298f97f3cb3\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScoper4298f97f3cb3\PhpParser\Node\Expr\BinaryOp
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
