<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb\PhpParser\Node\Stmt;

use _PhpScoper58a0a169dcfb\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper58a0a169dcfb\PhpParser\Node\Stmt
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
