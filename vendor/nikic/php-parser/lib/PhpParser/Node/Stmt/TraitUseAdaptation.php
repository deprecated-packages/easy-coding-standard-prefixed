<?php

declare (strict_types=1);
namespace _PhpScoperab9510cd5d97\PhpParser\Node\Stmt;

use _PhpScoperab9510cd5d97\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperab9510cd5d97\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
