<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1\PhpParser\Node\Stmt;

use _PhpScoperaa402dd1b1f1\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperaa402dd1b1f1\PhpParser\Node\Stmt
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
