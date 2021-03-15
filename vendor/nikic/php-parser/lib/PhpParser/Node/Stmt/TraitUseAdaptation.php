<?php

declare (strict_types=1);
namespace _PhpScoper64e7ad844899\PhpParser\Node\Stmt;

use _PhpScoper64e7ad844899\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper64e7ad844899\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
