<?php

declare (strict_types=1);
namespace _PhpScoper528afa732cbd\PhpParser\Node\Stmt;

use _PhpScoper528afa732cbd\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper528afa732cbd\PhpParser\Node\Stmt
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
