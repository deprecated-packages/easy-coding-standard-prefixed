<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\PhpParser\Node\Stmt;

use _PhpScoper64a921a5401b\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper64a921a5401b\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
