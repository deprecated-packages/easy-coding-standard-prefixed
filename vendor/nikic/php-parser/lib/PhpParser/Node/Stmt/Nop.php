<?php

declare (strict_types=1);
namespace _PhpScoper3f3a54dd086f\PhpParser\Node\Stmt;

use _PhpScoper3f3a54dd086f\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper3f3a54dd086f\PhpParser\Node\Stmt
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
