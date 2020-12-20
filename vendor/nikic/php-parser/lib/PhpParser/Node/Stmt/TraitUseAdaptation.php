<?php

declare (strict_types=1);
namespace _PhpScoper57210e33e43a\PhpParser\Node\Stmt;

use _PhpScoper57210e33e43a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper57210e33e43a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
