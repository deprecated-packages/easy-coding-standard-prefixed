<?php

declare (strict_types=1);
namespace _PhpScoper971ef29294dd\PhpParser\Node\Stmt;

use _PhpScoper971ef29294dd\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper971ef29294dd\PhpParser\Node\Stmt
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
