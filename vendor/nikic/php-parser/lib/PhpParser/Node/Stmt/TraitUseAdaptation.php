<?php

declare (strict_types=1);
namespace _PhpScoper836bc32aecc2\PhpParser\Node\Stmt;

use _PhpScoper836bc32aecc2\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper836bc32aecc2\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
