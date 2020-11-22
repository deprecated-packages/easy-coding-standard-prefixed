<?php

declare (strict_types=1);
namespace _PhpScoper16399a42e87c\PhpParser\Node\Stmt;

use _PhpScoper16399a42e87c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper16399a42e87c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
