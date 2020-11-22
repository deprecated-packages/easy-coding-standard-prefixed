<?php

declare (strict_types=1);
namespace _PhpScoper6db4fde00cda\PhpParser\Node\Stmt;

use _PhpScoper6db4fde00cda\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper6db4fde00cda\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
