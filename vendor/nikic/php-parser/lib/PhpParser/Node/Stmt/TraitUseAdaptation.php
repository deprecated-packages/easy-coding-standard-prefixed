<?php

declare (strict_types=1);
namespace _PhpScoperad4605bb9267\PhpParser\Node\Stmt;

use _PhpScoperad4605bb9267\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperad4605bb9267\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
