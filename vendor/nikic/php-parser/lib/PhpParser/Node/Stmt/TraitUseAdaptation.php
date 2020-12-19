<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c\PhpParser\Node\Stmt;

use _PhpScopera6f918786d5c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera6f918786d5c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
