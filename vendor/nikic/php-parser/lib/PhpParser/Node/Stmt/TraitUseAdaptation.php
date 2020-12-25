<?php

declare (strict_types=1);
namespace _PhpScoper592524ba34f0\PhpParser\Node\Stmt;

use _PhpScoper592524ba34f0\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper592524ba34f0\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
