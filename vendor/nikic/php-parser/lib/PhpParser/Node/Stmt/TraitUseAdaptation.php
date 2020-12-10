<?php

declare (strict_types=1);
namespace _PhpScoperf7b66f9e3817\PhpParser\Node\Stmt;

use _PhpScoperf7b66f9e3817\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperf7b66f9e3817\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
