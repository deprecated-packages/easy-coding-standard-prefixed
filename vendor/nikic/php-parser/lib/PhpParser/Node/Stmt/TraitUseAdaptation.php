<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60\PhpParser\Node\Stmt;

use _PhpScoperc83f84c90b60\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc83f84c90b60\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
