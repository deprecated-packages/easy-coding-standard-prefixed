<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\Node\Stmt;

use _PhpScoperbc5235eb86f3\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperbc5235eb86f3\PhpParser\Node\Stmt
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
