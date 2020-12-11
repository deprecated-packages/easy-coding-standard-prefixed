<?php

declare (strict_types=1);
namespace _PhpScoper23ef26a4fb01\PhpParser\Node\Stmt;

use _PhpScoper23ef26a4fb01\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper23ef26a4fb01\PhpParser\Node\Stmt
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
