<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper64a921a5401b\PhpParser\Node\Expr\BinaryOp;
class Identical extends \_PhpScoper64a921a5401b\PhpParser\Node\Expr\BinaryOp
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
