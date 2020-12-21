<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser\Node\Stmt;

use _PhpScoperfcf15c26e033\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfcf15c26e033\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
