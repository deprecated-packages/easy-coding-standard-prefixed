<?php

declare (strict_types=1);
namespace _PhpScoper4edd80b4ab80\PhpParser\Node\Stmt;

use _PhpScoper4edd80b4ab80\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper4edd80b4ab80\PhpParser\Node\Stmt
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
