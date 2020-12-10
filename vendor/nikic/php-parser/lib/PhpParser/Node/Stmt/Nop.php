<?php

declare (strict_types=1);
namespace _PhpScoper21c6ce8bfe5d\PhpParser\Node\Stmt;

use _PhpScoper21c6ce8bfe5d\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper21c6ce8bfe5d\PhpParser\Node\Stmt
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
