<?php

declare (strict_types=1);
namespace _PhpScoperb2e2c0c42e71\PhpParser\Node\Stmt;

use _PhpScoperb2e2c0c42e71\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperb2e2c0c42e71\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
