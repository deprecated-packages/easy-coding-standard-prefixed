<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487\PhpParser\Node\Stmt;

use _PhpScopera3425146d487\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScopera3425146d487\PhpParser\Node\Stmt
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
