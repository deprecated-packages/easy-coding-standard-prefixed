<?php

declare (strict_types=1);
namespace _PhpScoper18bd934c069f\PhpParser\Node\Stmt;

use _PhpScoper18bd934c069f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper18bd934c069f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
