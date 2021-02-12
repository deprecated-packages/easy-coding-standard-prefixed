<?php

declare (strict_types=1);
namespace _PhpScoper4fc0030e9d22\PhpParser\Node\Stmt;

use _PhpScoper4fc0030e9d22\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper4fc0030e9d22\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
