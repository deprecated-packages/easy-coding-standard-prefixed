<?php

declare (strict_types=1);
namespace _PhpScopera061b8a47e36\PhpParser\Node\Stmt;

use _PhpScopera061b8a47e36\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera061b8a47e36\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
