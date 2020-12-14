<?php

declare (strict_types=1);
namespace _PhpScoper8a0112f19f39\PhpParser\Node\Stmt;

use _PhpScoper8a0112f19f39\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper8a0112f19f39\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
