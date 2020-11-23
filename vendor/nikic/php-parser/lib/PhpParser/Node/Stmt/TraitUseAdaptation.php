<?php

declare (strict_types=1);
namespace _PhpScoperc4b135661b3a\PhpParser\Node\Stmt;

use _PhpScoperc4b135661b3a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc4b135661b3a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
