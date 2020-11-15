<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper70072c07b02b\PhpParser\Node\Expr\BinaryOp;
class ShiftLeft extends \_PhpScoper70072c07b02b\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<<';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_ShiftLeft';
    }
}
