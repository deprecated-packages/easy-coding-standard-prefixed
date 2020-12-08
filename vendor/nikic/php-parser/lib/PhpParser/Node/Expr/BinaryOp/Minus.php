<?php

declare (strict_types=1);
namespace _PhpScoperf3f1be0d8a30\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperf3f1be0d8a30\PhpParser\Node\Expr\BinaryOp;
class Minus extends \_PhpScoperf3f1be0d8a30\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '-';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Minus';
    }
}
