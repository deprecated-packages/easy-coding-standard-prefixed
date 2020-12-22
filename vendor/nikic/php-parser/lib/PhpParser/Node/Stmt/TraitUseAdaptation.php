<?php

declare (strict_types=1);
namespace _PhpScoper57272265e1c9\PhpParser\Node\Stmt;

use _PhpScoper57272265e1c9\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper57272265e1c9\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
