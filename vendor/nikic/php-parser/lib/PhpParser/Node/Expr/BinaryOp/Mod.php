<?php

declare (strict_types=1);
namespace _PhpScoper528afa732cbd\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper528afa732cbd\PhpParser\Node\Expr\BinaryOp;
class Mod extends \_PhpScoper528afa732cbd\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '%';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Mod';
    }
}
