<?php

declare (strict_types=1);
namespace _PhpScoper38a7d00685f8\PhpParser\Node\Stmt;

use _PhpScoper38a7d00685f8\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper38a7d00685f8\PhpParser\Node\Stmt
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
