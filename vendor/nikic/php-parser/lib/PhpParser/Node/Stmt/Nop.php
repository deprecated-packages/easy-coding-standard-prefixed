<?php

declare (strict_types=1);
namespace _PhpScoper28ab463fc3ba\PhpParser\Node\Stmt;

use _PhpScoper28ab463fc3ba\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper28ab463fc3ba\PhpParser\Node\Stmt
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
