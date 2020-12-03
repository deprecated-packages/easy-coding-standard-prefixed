<?php

declare (strict_types=1);
namespace _PhpScoper6c2f17c43d2d\PhpParser\Node\Stmt;

use _PhpScoper6c2f17c43d2d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper6c2f17c43d2d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
