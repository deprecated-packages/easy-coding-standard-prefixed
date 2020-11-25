<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper418afc2f157c\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScoper418afc2f157c\PhpParser\Node\Expr\BinaryOp
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
