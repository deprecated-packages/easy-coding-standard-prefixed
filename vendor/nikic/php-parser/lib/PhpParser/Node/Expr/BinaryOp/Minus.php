<?php

declare (strict_types=1);
namespace _PhpScoper7312d63d356f\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper7312d63d356f\PhpParser\Node\Expr\BinaryOp;
class Minus extends \_PhpScoper7312d63d356f\PhpParser\Node\Expr\BinaryOp
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
