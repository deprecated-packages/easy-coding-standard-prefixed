<?php

declare (strict_types=1);
namespace _PhpScoperb6ccec8ab642\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb6ccec8ab642\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScoperb6ccec8ab642\PhpParser\Node\Expr\BinaryOp
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
