<?php

declare (strict_types=1);
namespace _PhpScoper8db4616aa69d\PhpParser\Node\Stmt;

use _PhpScoper8db4616aa69d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper8db4616aa69d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
