<?php

declare (strict_types=1);
namespace _PhpScopere341acab57d4\PhpParser\Node\Stmt;

use _PhpScopere341acab57d4\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopere341acab57d4\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
