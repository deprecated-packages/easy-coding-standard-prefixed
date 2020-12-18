<?php

declare (strict_types=1);
namespace _PhpScoper4d3fa30a680b\PhpParser\Node\Stmt;

use _PhpScoper4d3fa30a680b\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper4d3fa30a680b\PhpParser\Node\Stmt
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
