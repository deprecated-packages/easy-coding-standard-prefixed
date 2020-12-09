<?php

declare (strict_types=1);
namespace _PhpScoper9b9ddfd01528\PhpParser\Node\Stmt;

use _PhpScoper9b9ddfd01528\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper9b9ddfd01528\PhpParser\Node\Stmt
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
