<?php

declare (strict_types=1);
namespace _PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\BinaryOp;
class BooleanAnd extends \_PhpScoper8a7636b3fdaf\PhpParser\Node\Expr\BinaryOp
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
