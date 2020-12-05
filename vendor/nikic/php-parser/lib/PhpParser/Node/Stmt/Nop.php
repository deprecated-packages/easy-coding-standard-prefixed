<?php

declare (strict_types=1);
namespace _PhpScoper87c77ad5700d\PhpParser\Node\Stmt;

use _PhpScoper87c77ad5700d\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper87c77ad5700d\PhpParser\Node\Stmt
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
