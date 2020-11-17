<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\PhpParser\Node\Stmt;

use _PhpScoper967c4b7e296e\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper967c4b7e296e\PhpParser\Node\Stmt
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
