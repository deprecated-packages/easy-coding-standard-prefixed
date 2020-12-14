<?php

declare (strict_types=1);
namespace _PhpScoper4e47e3b12394\PhpParser\Node\Stmt;

use _PhpScoper4e47e3b12394\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper4e47e3b12394\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
