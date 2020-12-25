<?php

declare (strict_types=1);
namespace _PhpScoperb44a315fec16\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb44a315fec16\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScoperb44a315fec16\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '/';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Div';
    }
}
