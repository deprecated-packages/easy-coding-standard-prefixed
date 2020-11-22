<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PhpParser\Node\Stmt;

use _PhpScoper6db4fde00cda\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper6db4fde00cda\PhpParser\Node\Stmt
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
