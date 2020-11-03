<?php

declare (strict_types=1);
namespace _PhpScoper5928e324b45e\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper5928e324b45e\PhpParser\Node\Expr\BinaryOp;
class NotEqual extends \_PhpScoper5928e324b45e\PhpParser\Node\Expr\BinaryOp
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
