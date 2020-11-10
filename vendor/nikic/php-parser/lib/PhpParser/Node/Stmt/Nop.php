<?php

declare (strict_types=1);
namespace _PhpScoper666af036e800\PhpParser\Node\Stmt;

use _PhpScoper666af036e800\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper666af036e800\PhpParser\Node\Stmt
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
