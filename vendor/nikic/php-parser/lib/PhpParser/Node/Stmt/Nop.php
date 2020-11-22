<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Node\Stmt;

use _PhpScoperfacc742d2745\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperfacc742d2745\PhpParser\Node\Stmt
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
