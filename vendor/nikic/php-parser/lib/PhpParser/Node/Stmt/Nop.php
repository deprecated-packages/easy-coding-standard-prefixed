<?php

declare (strict_types=1);
namespace _PhpScoper08748c77fa1c\PhpParser\Node\Stmt;

use _PhpScoper08748c77fa1c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper08748c77fa1c\PhpParser\Node\Stmt
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
