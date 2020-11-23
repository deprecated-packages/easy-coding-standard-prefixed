<?php

declare (strict_types=1);
namespace _PhpScopere341acab57d4\PhpParser\Node\Stmt;

use _PhpScopere341acab57d4\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopere341acab57d4\PhpParser\Node\Stmt
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
