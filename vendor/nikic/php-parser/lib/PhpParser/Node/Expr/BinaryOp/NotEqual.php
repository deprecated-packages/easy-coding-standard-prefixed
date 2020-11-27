<?php

declare (strict_types=1);
namespace _PhpScoper08748c77fa1c\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper08748c77fa1c\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoper08748c77fa1c\PhpParser\Node\Expr\BinaryOp
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
