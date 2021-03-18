<?php

declare (strict_types=1);
namespace _PhpScoper0ba97041430d\PhpParser\Node\Stmt;

use _PhpScoper0ba97041430d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper0ba97041430d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
