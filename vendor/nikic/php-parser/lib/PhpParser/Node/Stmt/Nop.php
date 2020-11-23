<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671\PhpParser\Node\Stmt;

use _PhpScoperd4c5032f0671\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperd4c5032f0671\PhpParser\Node\Stmt
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
