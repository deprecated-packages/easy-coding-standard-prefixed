<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Node\Stmt;

use _PhpScoperda2604e33acb\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperda2604e33acb\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
