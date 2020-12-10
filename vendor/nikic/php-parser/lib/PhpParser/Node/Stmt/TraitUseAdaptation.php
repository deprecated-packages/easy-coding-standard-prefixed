<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb\PhpParser\Node\Stmt;

use _PhpScoper58a0a169dcfb\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper58a0a169dcfb\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
