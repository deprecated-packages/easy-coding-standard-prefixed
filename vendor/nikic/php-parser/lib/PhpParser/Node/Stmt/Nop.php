<?php

declare (strict_types=1);
namespace _PhpScoperb44a315fec16\PhpParser\Node\Stmt;

use _PhpScoperb44a315fec16\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperb44a315fec16\PhpParser\Node\Stmt
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
