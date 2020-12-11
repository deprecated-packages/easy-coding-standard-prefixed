<?php

declare (strict_types=1);
namespace _PhpScoper1e80a2e03314\PhpParser\Node\Stmt;

use _PhpScoper1e80a2e03314\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper1e80a2e03314\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
