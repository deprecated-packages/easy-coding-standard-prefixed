<?php

declare (strict_types=1);
namespace _PhpScoper5ade29b97028\PhpParser\Node\Stmt;

use _PhpScoper5ade29b97028\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper5ade29b97028\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
