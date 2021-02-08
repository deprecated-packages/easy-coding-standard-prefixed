<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser\Node\Stmt;

use _PhpScoper326af2119eba\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper326af2119eba\PhpParser\Node\Stmt
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
