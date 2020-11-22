<?php

declare (strict_types=1);
namespace _PhpScoper16399a42e87c\PhpParser\Node\Stmt;

use _PhpScoper16399a42e87c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper16399a42e87c\PhpParser\Node\Stmt
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
