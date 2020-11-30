<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PhpParser\Node\Stmt;

use _PhpScoper246d7c16d32f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper246d7c16d32f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
