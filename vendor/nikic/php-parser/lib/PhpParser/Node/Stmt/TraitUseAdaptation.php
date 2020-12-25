<?php

declare (strict_types=1);
namespace _PhpScoper9e3283ae8193\PhpParser\Node\Stmt;

use _PhpScoper9e3283ae8193\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper9e3283ae8193\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
