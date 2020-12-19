<?php

declare (strict_types=1);
namespace _PhpScoper269dc521b0fa\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper269dc521b0fa\PhpParser\Node\Expr\BinaryOp;
class BitwiseOr extends \_PhpScoper269dc521b0fa\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '|';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseOr';
    }
}
