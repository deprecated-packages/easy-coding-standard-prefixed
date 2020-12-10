<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d\PhpParser\Node\Stmt;

use _PhpScopera1a51450b61d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera1a51450b61d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
