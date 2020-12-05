<?php

declare (strict_types=1);
namespace _PhpScoper59ccd3f8e121\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper59ccd3f8e121\PhpParser\Node\Expr\BinaryOp;
class Plus extends \_PhpScoper59ccd3f8e121\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '+';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Plus';
    }
}
