<?php

declare (strict_types=1);
namespace _PhpScoper326bba7310a2\PhpParser\Node\Stmt;

use _PhpScoper326bba7310a2\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper326bba7310a2\PhpParser\Node\Stmt
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
