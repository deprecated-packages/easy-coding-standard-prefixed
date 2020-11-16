<?php

declare (strict_types=1);
namespace _PhpScoper8e2d8a2760d1\PhpParser\Node\Stmt;

use _PhpScoper8e2d8a2760d1\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper8e2d8a2760d1\PhpParser\Node\Stmt
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
