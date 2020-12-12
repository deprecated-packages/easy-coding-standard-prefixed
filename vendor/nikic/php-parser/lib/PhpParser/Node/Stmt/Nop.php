<?php

declare (strict_types=1);
namespace _PhpScoper11a6395266c4\PhpParser\Node\Stmt;

use _PhpScoper11a6395266c4\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper11a6395266c4\PhpParser\Node\Stmt
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
