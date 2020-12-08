<?php

declare (strict_types=1);
namespace _PhpScoperf053e888b664\PhpParser\Node\Stmt;

use _PhpScoperf053e888b664\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperf053e888b664\PhpParser\Node\Stmt
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
