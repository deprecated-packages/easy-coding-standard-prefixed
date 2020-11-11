<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\PhpParser\Node\Stmt;

use _PhpScoper0f5cd390c37a\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper0f5cd390c37a\PhpParser\Node\Stmt
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
