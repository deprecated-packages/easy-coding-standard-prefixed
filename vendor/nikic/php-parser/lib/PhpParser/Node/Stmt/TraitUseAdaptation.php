<?php

declare (strict_types=1);
namespace _PhpScoperc8fea59b0cb1\PhpParser\Node\Stmt;

use _PhpScoperc8fea59b0cb1\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc8fea59b0cb1\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
