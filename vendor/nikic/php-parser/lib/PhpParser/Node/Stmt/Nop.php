<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c\PhpParser\Node\Stmt;

use _PhpScoper418afc2f157c\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper418afc2f157c\PhpParser\Node\Stmt
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
