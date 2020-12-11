<?php

declare (strict_types=1);
namespace _PhpScoper1e80a2e03314\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper1e80a2e03314\PhpParser\Node\Expr\BinaryOp;
class Coalesce extends \_PhpScoper1e80a2e03314\PhpParser\Node\Expr\BinaryOp
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
