<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\Node\Stmt;

use _PhpScoperc7c7dddc9238\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperc7c7dddc9238\PhpParser\Node\Stmt
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
