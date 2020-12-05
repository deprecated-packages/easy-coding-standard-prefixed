<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PhpParser\Node\Stmt;

use _PhpScoper81b3ff5ab9fe\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper81b3ff5ab9fe\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
