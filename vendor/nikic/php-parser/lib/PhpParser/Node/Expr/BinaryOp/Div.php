<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperca8ca183ac38\PhpParser\Node\Expr\BinaryOp;
class Div extends \_PhpScoperca8ca183ac38\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '/';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Div';
    }
}
