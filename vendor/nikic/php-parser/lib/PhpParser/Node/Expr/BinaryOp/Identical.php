<?php

declare (strict_types=1);
namespace _PhpScoper15c5423f4731\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper15c5423f4731\PhpParser\Node\Expr\BinaryOp;
class Identical extends \_PhpScoper15c5423f4731\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '===';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Identical';
    }
}
