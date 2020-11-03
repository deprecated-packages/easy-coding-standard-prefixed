<?php

declare (strict_types=1);
namespace _PhpScoper5928e324b45e\PhpParser\Node\Stmt;

use _PhpScoper5928e324b45e\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends \_PhpScoper5928e324b45e\PhpParser\Node\Stmt
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
