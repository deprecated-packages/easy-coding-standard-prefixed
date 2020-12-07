<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\BinaryOp;
class Greater extends \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '>';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Greater';
    }
}
