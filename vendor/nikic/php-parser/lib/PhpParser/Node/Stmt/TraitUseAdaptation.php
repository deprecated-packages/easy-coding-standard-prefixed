<?php

declare (strict_types=1);
namespace _PhpScoper4298f97f3cb3\PhpParser\Node\Stmt;

use _PhpScoper4298f97f3cb3\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper4298f97f3cb3\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
