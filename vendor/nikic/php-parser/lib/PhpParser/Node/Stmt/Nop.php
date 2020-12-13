<?php

declare (strict_types=1);
namespace _PhpScoper8db4616aa69d\PhpParser\Node\Stmt;

use _PhpScoper8db4616aa69d\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper8db4616aa69d\PhpParser\Node\Stmt
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
