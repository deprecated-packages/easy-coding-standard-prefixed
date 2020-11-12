<?php

declare (strict_types=1);
namespace _PhpScoper7cef7256eba6\PhpParser\Node\Stmt;

use _PhpScoper7cef7256eba6\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper7cef7256eba6\PhpParser\Node\Stmt
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
