<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153\PhpParser\Node\Stmt;

use _PhpScoperbd5c5a045153\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperbd5c5a045153\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
