<?php

declare (strict_types=1);
namespace _PhpScoperc5bee3a837bb\PhpParser\Node\Stmt;

use _PhpScoperc5bee3a837bb\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoperc5bee3a837bb\PhpParser\Node\Stmt
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
