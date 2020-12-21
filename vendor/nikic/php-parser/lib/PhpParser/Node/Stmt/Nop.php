<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4\PhpParser\Node\Stmt;

use _PhpScoperb730595bc9f4\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb730595bc9f4\PhpParser\Node\Stmt
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
