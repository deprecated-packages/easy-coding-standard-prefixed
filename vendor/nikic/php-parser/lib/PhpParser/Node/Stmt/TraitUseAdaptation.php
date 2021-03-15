<?php

declare (strict_types=1);
namespace _PhpScoper8163b0b2b8f3\PhpParser\Node\Stmt;

use _PhpScoper8163b0b2b8f3\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper8163b0b2b8f3\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
