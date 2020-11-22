<?php

declare (strict_types=1);
namespace _PhpScoper797695bcfb1f\PhpParser\Node\Stmt;

use _PhpScoper797695bcfb1f\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper797695bcfb1f\PhpParser\Node\Stmt
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
