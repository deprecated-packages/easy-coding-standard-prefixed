<?php

declare (strict_types=1);
namespace _PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt;

use _PhpScoperb6d4bd368bd9\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperb6d4bd368bd9\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
