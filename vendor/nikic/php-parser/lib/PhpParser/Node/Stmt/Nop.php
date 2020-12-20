<?php

declare (strict_types=1);
namespace _PhpScoper611f49771945\PhpParser\Node\Stmt;

use _PhpScoper611f49771945\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper611f49771945\PhpParser\Node\Stmt
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
