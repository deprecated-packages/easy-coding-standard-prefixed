<?php

declare (strict_types=1);
namespace _PhpScoper9f8d5dcff860\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper9f8d5dcff860\PhpParser\Node\Expr\BinaryOp;
class Identical extends \_PhpScoper9f8d5dcff860\PhpParser\Node\Expr\BinaryOp
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
