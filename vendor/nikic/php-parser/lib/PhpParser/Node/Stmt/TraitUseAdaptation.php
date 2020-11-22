<?php

declare (strict_types=1);
namespace _PhpScoper21fff473f90a\PhpParser\Node\Stmt;

use _PhpScoper21fff473f90a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper21fff473f90a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
