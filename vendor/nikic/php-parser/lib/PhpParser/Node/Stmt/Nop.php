<?php

declare (strict_types=1);
namespace _PhpScoper06c5fb6c14ed\PhpParser\Node\Stmt;

use _PhpScoper06c5fb6c14ed\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper06c5fb6c14ed\PhpParser\Node\Stmt
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
