<?php

declare (strict_types=1);
namespace _PhpScoper611f49771945\PhpParser\Node\Stmt;

use _PhpScoper611f49771945\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper611f49771945\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
