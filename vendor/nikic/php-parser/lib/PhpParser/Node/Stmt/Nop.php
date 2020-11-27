<?php

declare (strict_types=1);
namespace _PhpScoper776637f3d3c3\PhpParser\Node\Stmt;

use _PhpScoper776637f3d3c3\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper776637f3d3c3\PhpParser\Node\Stmt
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
