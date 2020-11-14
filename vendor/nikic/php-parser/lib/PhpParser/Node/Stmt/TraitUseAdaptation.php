<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt;

use _PhpScoperb09c3ec8e01a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
