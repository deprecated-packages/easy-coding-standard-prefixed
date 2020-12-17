<?php

declare (strict_types=1);
namespace _PhpScoperfa7254c25e18\PhpParser\Node\Stmt;

use _PhpScoperfa7254c25e18\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperfa7254c25e18\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
