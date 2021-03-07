<?php

declare (strict_types=1);
namespace _PhpScoper6625323d9c29\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper6625323d9c29\PhpParser\Node\Expr\BinaryOp;
class Identical extends \_PhpScoper6625323d9c29\PhpParser\Node\Expr\BinaryOp
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
