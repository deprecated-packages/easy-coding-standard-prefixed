<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Node\Expr\BinaryOp;

use _PhpScoperaad82bb90a86\PhpParser\Node\Expr\BinaryOp;
class Spaceship extends \_PhpScoperaad82bb90a86\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '<=>';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_Spaceship';
    }
}
