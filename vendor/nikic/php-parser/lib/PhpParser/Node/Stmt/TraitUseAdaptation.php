<?php

declare (strict_types=1);
namespace _PhpScopera3425146d487\PhpParser\Node\Stmt;

use _PhpScopera3425146d487\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopera3425146d487\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
