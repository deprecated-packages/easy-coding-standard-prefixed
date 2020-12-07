<?php

declare (strict_types=1);
namespace _PhpScoperfa521053d812\PhpParser\Node\Stmt;

use _PhpScoperfa521053d812\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfa521053d812\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
