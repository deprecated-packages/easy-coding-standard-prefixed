<?php

declare (strict_types=1);
namespace _PhpScoper7f5523334c1b\PhpParser\Node\Stmt;

use _PhpScoper7f5523334c1b\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper7f5523334c1b\PhpParser\Node\Stmt
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
