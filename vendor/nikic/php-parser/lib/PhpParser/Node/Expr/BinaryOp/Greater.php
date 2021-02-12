<?php

declare (strict_types=1);
namespace _PhpScoper4fc0030e9d22\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper4fc0030e9d22\PhpParser\Node\Expr\BinaryOp;
class Greater extends \_PhpScoper4fc0030e9d22\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '>';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Greater';
    }
}
