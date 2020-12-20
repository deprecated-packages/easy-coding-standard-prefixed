<?php

declare (strict_types=1);
namespace _PhpScoper57210e33e43a\PhpParser\Node\Stmt;

use _PhpScoper57210e33e43a\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper57210e33e43a\PhpParser\Node\Stmt
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
