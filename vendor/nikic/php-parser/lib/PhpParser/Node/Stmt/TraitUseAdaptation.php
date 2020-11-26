<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a\PhpParser\Node\Stmt;

use _PhpScoper8acb416c2f5a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper8acb416c2f5a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
