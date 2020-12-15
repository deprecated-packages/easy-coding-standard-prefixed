<?php

declare (strict_types=1);
namespace _PhpScoper6a1dd9b8a650\PhpParser\Node\Stmt;

use _PhpScoper6a1dd9b8a650\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper6a1dd9b8a650\PhpParser\Node\Stmt
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
