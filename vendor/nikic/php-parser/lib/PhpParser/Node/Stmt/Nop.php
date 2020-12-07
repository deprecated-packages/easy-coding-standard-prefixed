<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Node\Stmt;

use _PhpScoperda2604e33acb\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperda2604e33acb\PhpParser\Node\Stmt
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
