<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\Node\Stmt;

use _PhpScoperc7c7dddc9238\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc7c7dddc9238\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
