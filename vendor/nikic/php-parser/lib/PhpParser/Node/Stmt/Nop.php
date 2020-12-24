<?php

declare (strict_types=1);
namespace _PhpScoper629192f0909b\PhpParser\Node\Stmt;

use _PhpScoper629192f0909b\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper629192f0909b\PhpParser\Node\Stmt
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
