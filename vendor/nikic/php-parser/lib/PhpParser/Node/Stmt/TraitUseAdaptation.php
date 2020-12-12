<?php

declare (strict_types=1);
namespace _PhpScoper8a05d21c15c9\PhpParser\Node\Stmt;

use _PhpScoper8a05d21c15c9\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper8a05d21c15c9\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
