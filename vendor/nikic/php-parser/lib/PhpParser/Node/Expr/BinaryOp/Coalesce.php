<?php

declare (strict_types=1);
namespace _PhpScoper4972b76c81a2\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper4972b76c81a2\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScoper4972b76c81a2\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '??';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Coalesce';
    }
}
