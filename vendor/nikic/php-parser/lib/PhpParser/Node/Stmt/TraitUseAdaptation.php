<?php

declare (strict_types=1);
namespace _PhpScoper6a0a7eb6e565\PhpParser\Node\Stmt;

use _PhpScoper6a0a7eb6e565\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper6a0a7eb6e565\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
