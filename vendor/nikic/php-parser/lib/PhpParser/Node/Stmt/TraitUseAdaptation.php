<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
