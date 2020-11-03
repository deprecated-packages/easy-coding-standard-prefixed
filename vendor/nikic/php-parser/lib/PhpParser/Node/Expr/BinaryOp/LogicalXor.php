<?php

declare (strict_types=1);
namespace _PhpScoper5928e324b45e\PhpParser\Node\Expr\BinaryOp;

use _PhpScoper5928e324b45e\PhpParser\Node\Expr\BinaryOp;
class LogicalXor extends \_PhpScoper5928e324b45e\PhpParser\Node\Expr\BinaryOp
{
    public function getOperatorSigil() : string
    {
        return 'xor';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_LogicalXor';
    }
}
