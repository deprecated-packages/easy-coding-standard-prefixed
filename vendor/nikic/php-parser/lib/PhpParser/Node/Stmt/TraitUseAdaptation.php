<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\Node\Stmt;

use _PhpScoperfd70a7e8e84f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfd70a7e8e84f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
