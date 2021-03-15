<?php

declare (strict_types=1);
namespace _PhpScoper971ef29294dd\PhpParser\Node\Stmt;

use _PhpScoper971ef29294dd\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper971ef29294dd\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
