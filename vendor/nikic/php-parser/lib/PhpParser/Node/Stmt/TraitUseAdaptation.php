<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Node\Stmt;

use _PhpScoperfacc742d2745\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfacc742d2745\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
