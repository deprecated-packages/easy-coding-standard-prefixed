<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\Node\Stmt;

use _PhpScoperb458b528613f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperb458b528613f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
