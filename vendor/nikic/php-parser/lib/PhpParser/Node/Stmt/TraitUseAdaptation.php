<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1\PhpParser\Node\Stmt;

use _PhpScoperaa402dd1b1f1\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperaa402dd1b1f1\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
