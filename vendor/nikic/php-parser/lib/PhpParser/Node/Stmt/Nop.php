<?php

declare (strict_types=1);
namespace _PhpScoperf3db63c305b2\PhpParser\Node\Stmt;

use _PhpScoperf3db63c305b2\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperf3db63c305b2\PhpParser\Node\Stmt
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
