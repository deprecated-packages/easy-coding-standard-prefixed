<?php

declare (strict_types=1);
namespace _PhpScoper13160cf3462c\PhpParser\Node\Stmt;

use _PhpScoper13160cf3462c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper13160cf3462c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
