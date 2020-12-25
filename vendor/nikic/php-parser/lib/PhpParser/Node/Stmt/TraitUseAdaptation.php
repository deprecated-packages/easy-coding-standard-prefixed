<?php

declare (strict_types=1);
namespace _PhpScoper64ca614e27fd\PhpParser\Node\Stmt;

use _PhpScoper64ca614e27fd\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper64ca614e27fd\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
