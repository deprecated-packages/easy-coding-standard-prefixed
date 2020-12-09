<?php

declare (strict_types=1);
namespace _PhpScoper9b9ddfd01528\PhpParser\Node\Stmt;

use _PhpScoper9b9ddfd01528\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper9b9ddfd01528\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
