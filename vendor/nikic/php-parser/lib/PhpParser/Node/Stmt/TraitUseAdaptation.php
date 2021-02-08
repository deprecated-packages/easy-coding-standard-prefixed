<?php

declare (strict_types=1);
namespace _PhpScoper7faa8deb0d3c\PhpParser\Node\Stmt;

use _PhpScoper7faa8deb0d3c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper7faa8deb0d3c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
