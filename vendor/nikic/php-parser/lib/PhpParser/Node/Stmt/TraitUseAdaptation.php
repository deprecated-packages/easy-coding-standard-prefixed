<?php

declare (strict_types=1);
namespace _PhpScoperd4c5032f0671\PhpParser\Node\Stmt;

use _PhpScoperd4c5032f0671\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperd4c5032f0671\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
