<?php

declare (strict_types=1);
namespace _PhpScoperb44a315fec16\PhpParser\Node\Stmt;

use _PhpScoperb44a315fec16\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperb44a315fec16\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
