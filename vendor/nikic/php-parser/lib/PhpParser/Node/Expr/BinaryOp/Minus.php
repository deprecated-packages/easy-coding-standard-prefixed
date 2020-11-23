<?php

declare (strict_types=1);
namespace _PhpScoper59558822d8c7\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper59558822d8c7\PhpParser\Node\Expr\BinaryOp;
class Minus extends \_PhpScoper59558822d8c7\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '-';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Minus';
    }
}
