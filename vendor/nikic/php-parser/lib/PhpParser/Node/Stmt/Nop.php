<?php

declare (strict_types=1);
namespace _PhpScopera34ae19e8d40\PhpParser\Node\Stmt;

use _PhpScopera34ae19e8d40\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera34ae19e8d40\PhpParser\Node\Stmt
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
