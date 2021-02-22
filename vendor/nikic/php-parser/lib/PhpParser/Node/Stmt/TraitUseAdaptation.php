<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55\PhpParser\Node\Stmt;

use _PhpScoper10b1b2c5ca55\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper10b1b2c5ca55\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
