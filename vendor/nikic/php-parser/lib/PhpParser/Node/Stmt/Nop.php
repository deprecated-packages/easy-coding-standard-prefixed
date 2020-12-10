<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\Node\Stmt;

use _PhpScoperb458b528613f\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb458b528613f\PhpParser\Node\Stmt
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
