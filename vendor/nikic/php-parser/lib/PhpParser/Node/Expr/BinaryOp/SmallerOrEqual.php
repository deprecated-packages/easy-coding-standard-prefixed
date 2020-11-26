<?php

declare (strict_types=1);
namespace _PhpScoper5cb8aea05893\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper5cb8aea05893\PhpParser\Node\Expr\BinaryOp;
class SmallerOrEqual extends \_PhpScoper5cb8aea05893\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_SmallerOrEqual';
    }
}
