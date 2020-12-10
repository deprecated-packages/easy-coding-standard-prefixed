<?php

declare (strict_types=1);
namespace _PhpScoper9ef667a5e42c\PhpParser\Node\Stmt;

use _PhpScoper9ef667a5e42c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper9ef667a5e42c\PhpParser\Node\Stmt
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
