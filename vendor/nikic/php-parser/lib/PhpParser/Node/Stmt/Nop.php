<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Node\Stmt;

use _PhpScoperedc2e0c967db\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt
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
