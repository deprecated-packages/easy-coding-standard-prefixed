<?php

declare (strict_types=1);
namespace _PhpScoper2fe14d6302bc\PhpParser\Node\Stmt;

use _PhpScoper2fe14d6302bc\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper2fe14d6302bc\PhpParser\Node\Stmt
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
