<?php

declare (strict_types=1);
namespace _PhpScoper64ca614e27fd\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper64ca614e27fd\PhpParser\Node\Expr\BinaryOp;
class BooleanAnd extends \_PhpScoper64ca614e27fd\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '&&';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BooleanAnd';
    }
}
