<?php

declare (strict_types=1);
namespace _PhpScoper0c0702cca4ac\PhpParser\Node\Stmt;

use _PhpScoper0c0702cca4ac\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper0c0702cca4ac\PhpParser\Node\Stmt
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
