<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812\PhpParser\Node\Stmt;

use _PhpScoperfa521053d812\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperfa521053d812\PhpParser\Node\Stmt
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
