<?php

declare (strict_types=1);
namespace _PhpScoper66292c14b658\PhpParser\Node\Stmt;

use _PhpScoper66292c14b658\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper66292c14b658\PhpParser\Node\Stmt
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
