<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\PhpParser\Node\Stmt;

use _PhpScoper64a921a5401b\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper64a921a5401b\PhpParser\Node\Stmt
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
