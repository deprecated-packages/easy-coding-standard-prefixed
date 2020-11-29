<?php

declare (strict_types=1);
namespace _PhpScoper28ab463fc3ba\PhpParser\Node\Stmt;

use _PhpScoper28ab463fc3ba\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper28ab463fc3ba\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
