<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt;

use _PhpScoperb73f9e44f4eb\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt
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
