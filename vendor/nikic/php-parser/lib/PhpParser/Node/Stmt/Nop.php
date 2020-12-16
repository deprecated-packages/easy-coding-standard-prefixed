<?php

declare (strict_types=1);
namespace _PhpScoperb6a8e65b492c\PhpParser\Node\Stmt;

use _PhpScoperb6a8e65b492c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb6a8e65b492c\PhpParser\Node\Stmt
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
