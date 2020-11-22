<?php

declare (strict_types=1);
namespace _PhpScoper66292c14b658\PhpParser\Node\Stmt;

use _PhpScoper66292c14b658\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper66292c14b658\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
