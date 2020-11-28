<?php

declare (strict_types=1);
namespace _PhpScoperc8b83ee8976a\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperc8b83ee8976a\PhpParser\Node\Expr\BinaryOp;
class Identical extends \_PhpScoperc8b83ee8976a\PhpParser\Node\Expr\BinaryOp
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
