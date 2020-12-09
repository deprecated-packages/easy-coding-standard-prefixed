<?php

declare (strict_types=1);
namespace _PhpScoper7f5523334c1b\PhpParser\Node\Stmt;

use _PhpScoper7f5523334c1b\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper7f5523334c1b\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
