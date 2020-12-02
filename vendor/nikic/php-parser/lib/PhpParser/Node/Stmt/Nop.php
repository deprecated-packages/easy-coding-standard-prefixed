<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565\PhpParser\Node\Stmt;

use _PhpScoper6a0a7eb6e565\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper6a0a7eb6e565\PhpParser\Node\Stmt
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
