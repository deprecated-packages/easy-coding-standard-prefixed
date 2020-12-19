<?php

declare (strict_types=1);
namespace _PhpScoper59da9ac954a6\PhpParser\Node\Stmt;

use _PhpScoper59da9ac954a6\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper59da9ac954a6\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
