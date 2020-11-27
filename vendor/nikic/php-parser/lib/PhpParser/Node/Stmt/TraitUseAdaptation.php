<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\Node\Stmt;

use _PhpScoper578a67c80b2b\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper578a67c80b2b\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
