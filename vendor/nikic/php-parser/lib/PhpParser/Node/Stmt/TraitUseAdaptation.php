<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\PhpParser\Node\Stmt;

use _PhpScoper21763e6c7ac4\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper21763e6c7ac4\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
