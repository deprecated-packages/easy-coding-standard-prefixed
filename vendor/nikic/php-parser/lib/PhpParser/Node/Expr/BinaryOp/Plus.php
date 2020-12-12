<?php

declare (strict_types=1);
namespace _PhpScoper3e7ab659bd82\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper3e7ab659bd82\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoper3e7ab659bd82\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '+';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Plus';
    }
}
