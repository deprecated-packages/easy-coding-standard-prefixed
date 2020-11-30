<?php

declare (strict_types=1);
namespace _PhpScoper2637e9a72c68\PhpParser\Node\Stmt;

use _PhpScoper2637e9a72c68\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper2637e9a72c68\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
