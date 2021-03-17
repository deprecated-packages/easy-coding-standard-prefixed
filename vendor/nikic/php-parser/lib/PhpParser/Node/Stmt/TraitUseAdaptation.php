<?php

declare (strict_types=1);
namespace _PhpScoper4e2df00556a9\PhpParser\Node\Stmt;

use _PhpScoper4e2df00556a9\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper4e2df00556a9\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
