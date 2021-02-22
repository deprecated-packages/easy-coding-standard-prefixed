<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55\PhpParser\Node\Stmt;

use _PhpScoper10b1b2c5ca55\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper10b1b2c5ca55\PhpParser\Node\Stmt
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
