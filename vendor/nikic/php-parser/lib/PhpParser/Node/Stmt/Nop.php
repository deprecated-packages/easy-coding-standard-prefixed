<?php

declare (strict_types=1);
namespace _PhpScoper63567e560066\PhpParser\Node\Stmt;

use _PhpScoper63567e560066\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper63567e560066\PhpParser\Node\Stmt
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
