<?php

declare (strict_types=1);
namespace _PhpScoper96382aaac118\PhpParser\Node\Stmt;

use _PhpScoper96382aaac118\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper96382aaac118\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
