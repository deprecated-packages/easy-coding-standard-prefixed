<?php

declare (strict_types=1);
namespace _PhpScoper59ccd3f8e121\PhpParser\Node\Stmt;

use _PhpScoper59ccd3f8e121\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper59ccd3f8e121\PhpParser\Node\Stmt
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
