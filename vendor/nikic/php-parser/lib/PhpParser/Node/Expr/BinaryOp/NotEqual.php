<?php

declare (strict_types=1);
namespace _PhpScoper59da9ac954a6\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper59da9ac954a6\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoper59da9ac954a6\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '!=';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_NotEqual';
    }
}
