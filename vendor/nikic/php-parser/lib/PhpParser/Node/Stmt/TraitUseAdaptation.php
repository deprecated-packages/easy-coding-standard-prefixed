<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749\PhpParser\Node\Stmt;

use _PhpScoperea337ed74749\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperea337ed74749\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
