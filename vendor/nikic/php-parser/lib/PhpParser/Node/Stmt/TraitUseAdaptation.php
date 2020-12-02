<?php

declare (strict_types=1);
namespace _PhpScoper992f4af8b9e0\PhpParser\Node\Stmt;

use _PhpScoper992f4af8b9e0\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper992f4af8b9e0\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
