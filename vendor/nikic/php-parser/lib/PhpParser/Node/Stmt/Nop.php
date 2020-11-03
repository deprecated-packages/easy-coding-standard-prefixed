<?php

declare (strict_types=1);
namespace _PhpScoper2b44cb0c30af\PhpParser\Node\Stmt;

use _PhpScoper2b44cb0c30af\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper2b44cb0c30af\PhpParser\Node\Stmt
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
