<?php

declare (strict_types=1);
namespace _PhpScoper49c742f5a4ee\PhpParser\Node\Stmt;

use _PhpScoper49c742f5a4ee\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper49c742f5a4ee\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
