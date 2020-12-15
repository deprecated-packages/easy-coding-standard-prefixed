<?php

declare (strict_types=1);
namespace _PhpScoper80dbed43490f\PhpParser\Node\Stmt;

use _PhpScoper80dbed43490f\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper80dbed43490f\PhpParser\Node\Stmt
{
    public function getSubNodeNames() : array
    {
        return [];
    }
    public function getType() : string
    {
        return 'Stmt_Nop';
    }
}
