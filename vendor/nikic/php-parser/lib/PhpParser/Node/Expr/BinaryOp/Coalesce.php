<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8acb416c2f5a\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScoper8acb416c2f5a\PhpParser\Node\Expr\BinaryOp
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
