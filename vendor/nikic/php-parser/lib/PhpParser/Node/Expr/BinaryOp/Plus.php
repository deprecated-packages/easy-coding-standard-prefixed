<?php

declare (strict_types=1);
namespace _PhpScoper7c1f54fd2f3a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper7c1f54fd2f3a\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoper7c1f54fd2f3a\PhpParser\Node\Expr\BinaryOp
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
