<?php

declare (strict_types=1);
namespace _PhpScoper3639953bb9e5\PhpParser\Node\Stmt;

use _PhpScoper3639953bb9e5\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper3639953bb9e5\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
