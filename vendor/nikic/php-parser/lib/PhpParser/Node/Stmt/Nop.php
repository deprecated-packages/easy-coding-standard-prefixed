<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\Node\Stmt;

use _PhpScopera8f555a7493c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera8f555a7493c\PhpParser\Node\Stmt
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
