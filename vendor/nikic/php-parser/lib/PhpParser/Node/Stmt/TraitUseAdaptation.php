<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt;

use _PhpScoperb73f9e44f4eb\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
