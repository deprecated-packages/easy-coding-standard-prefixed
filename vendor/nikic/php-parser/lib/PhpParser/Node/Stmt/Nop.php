<?php

declare (strict_types=1);
namespace _PhpScoper7faa8deb0d3c\PhpParser\Node\Stmt;

use _PhpScoper7faa8deb0d3c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper7faa8deb0d3c\PhpParser\Node\Stmt
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
