<?php

declare (strict_types=1);
namespace _PhpScoper4e47e3b12394\PhpParser\Node\Stmt;

use _PhpScoper4e47e3b12394\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper4e47e3b12394\PhpParser\Node\Stmt
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
