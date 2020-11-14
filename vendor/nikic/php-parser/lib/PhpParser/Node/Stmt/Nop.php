<?php

declare (strict_types=1);
namespace _PhpScoperd4937ee9b515\PhpParser\Node\Stmt;

use _PhpScoperd4937ee9b515\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperd4937ee9b515\PhpParser\Node\Stmt
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
