<?php

declare (strict_types=1);
namespace _PhpScoper9613f3fac51d\PhpParser\Node\Stmt;

use _PhpScoper9613f3fac51d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper9613f3fac51d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
