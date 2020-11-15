<?php

declare (strict_types=1);
namespace _PhpScopera189153e1f79\PhpParser\Node\Stmt;

use _PhpScopera189153e1f79\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera189153e1f79\PhpParser\Node\Stmt
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
