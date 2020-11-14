<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\Node\Expr\BinaryOp;

use _PhpScopercda2b863d098\PhpParser\Node\Expr\BinaryOp;
class Concat extends \_PhpScopercda2b863d098\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '.';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Concat';
    }
}
