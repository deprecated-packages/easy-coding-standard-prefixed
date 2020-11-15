<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\PhpParser\Node\Stmt;

use _PhpScoper279cf54b77ad\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper279cf54b77ad\PhpParser\Node\Stmt
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
