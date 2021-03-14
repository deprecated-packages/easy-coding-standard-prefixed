<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Node\Stmt;

use _PhpScopera1f11cc38772\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera1f11cc38772\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
