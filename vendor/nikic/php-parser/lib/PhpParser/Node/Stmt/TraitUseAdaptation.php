<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\Node\Stmt;

use _PhpScoper842c7347e6be\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper842c7347e6be\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
