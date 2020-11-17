<?php

declare (strict_types=1);
namespace _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoperad4b7e2c09d8\PhpParser\Node\Expr\BinaryOp
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
