<?php

declare (strict_types=1);
namespace _PhpScoperb6ccec8ab642\PhpParser\Node\Stmt;

use _PhpScoperb6ccec8ab642\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb6ccec8ab642\PhpParser\Node\Stmt
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
