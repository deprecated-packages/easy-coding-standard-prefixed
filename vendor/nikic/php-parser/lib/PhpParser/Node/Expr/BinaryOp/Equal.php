<?php

declare (strict_types=1);
namespace _PhpScoper2d2a405cc0f8\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper2d2a405cc0f8\PhpParser\Node\Expr\BinaryOp;
class Equal extends \_PhpScoper2d2a405cc0f8\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '==';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Equal';
    }
}
