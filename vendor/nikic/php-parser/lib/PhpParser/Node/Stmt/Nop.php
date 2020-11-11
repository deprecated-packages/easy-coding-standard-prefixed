<?php

declare (strict_types=1);
namespace _PhpScoper4f985154d5a0\PhpParser\Node\Stmt;

use _PhpScoper4f985154d5a0\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper4f985154d5a0\PhpParser\Node\Stmt
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
