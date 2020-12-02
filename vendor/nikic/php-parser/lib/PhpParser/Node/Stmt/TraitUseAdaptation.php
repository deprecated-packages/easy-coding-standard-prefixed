<?php

declare (strict_types=1);
namespace _PhpScopera34ae19e8d40\PhpParser\Node\Stmt;

use _PhpScopera34ae19e8d40\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera34ae19e8d40\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
