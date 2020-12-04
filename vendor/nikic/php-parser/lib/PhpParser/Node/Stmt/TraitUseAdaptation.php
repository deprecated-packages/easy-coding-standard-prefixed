<?php

declare (strict_types=1);
namespace _PhpScopera04bf8e97c06\PhpParser\Node\Stmt;

use _PhpScopera04bf8e97c06\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera04bf8e97c06\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
