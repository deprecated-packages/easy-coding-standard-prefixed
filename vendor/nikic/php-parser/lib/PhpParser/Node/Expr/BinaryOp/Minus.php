<?php

declare (strict_types=1);
namespace _PhpScoperd3d57724c802\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperd3d57724c802\PhpParser\Node\Expr\BinaryOp;
class Minus extends \_PhpScoperd3d57724c802\PhpParser\Node\Expr\BinaryOp
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
