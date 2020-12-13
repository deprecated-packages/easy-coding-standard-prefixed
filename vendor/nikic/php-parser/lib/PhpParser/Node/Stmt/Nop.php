<?php

declare (strict_types=1);
namespace _PhpScoper78af57a363a0\PhpParser\Node\Stmt;

use _PhpScoper78af57a363a0\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper78af57a363a0\PhpParser\Node\Stmt
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
