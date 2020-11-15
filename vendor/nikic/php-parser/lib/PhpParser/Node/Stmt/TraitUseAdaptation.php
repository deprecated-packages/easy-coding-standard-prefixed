<?php

declare (strict_types=1);
namespace _PhpScoperd9c3b46af121\PhpParser\Node\Stmt;

use _PhpScoperd9c3b46af121\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd9c3b46af121\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
