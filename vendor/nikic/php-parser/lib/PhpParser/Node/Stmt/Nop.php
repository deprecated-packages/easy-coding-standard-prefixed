<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PhpParser\Node\Stmt;

use _PhpScopera4fc793dae73\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera4fc793dae73\PhpParser\Node\Stmt
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
