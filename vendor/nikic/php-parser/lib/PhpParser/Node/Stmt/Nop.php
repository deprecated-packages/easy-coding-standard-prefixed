<?php

declare (strict_types=1);
namespace _PhpScoper3ba93baeac18\PhpParser\Node\Stmt;

use _PhpScoper3ba93baeac18\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper3ba93baeac18\PhpParser\Node\Stmt
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
