<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper06c5fb6c14ed\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScoper06c5fb6c14ed\PhpParser\Node\Expr\BinaryOp
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
