<?php

declare (strict_types=1);
namespace _PhpScoper89c09b8e7101\PhpParser\Node\Stmt;

use _PhpScoper89c09b8e7101\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper89c09b8e7101\PhpParser\Node\Stmt
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
