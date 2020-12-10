<?php

declare (strict_types=1);
namespace _PhpScoper908feaf49cd8\PhpParser\Node\Stmt;

use _PhpScoper908feaf49cd8\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper908feaf49cd8\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
