<?php

declare (strict_types=1);
namespace _PhpScoper87c77ad5700d\PhpParser\Node\Stmt;

use _PhpScoper87c77ad5700d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper87c77ad5700d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
