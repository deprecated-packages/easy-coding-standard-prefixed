<?php

declare (strict_types=1);
namespace _PhpScoper47644ab3aa9a\PhpParser\Node\Stmt;

use _PhpScoper47644ab3aa9a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper47644ab3aa9a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
