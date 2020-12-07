<?php

declare (strict_types=1);
namespace _PhpScopereb8678af2407\PhpParser\Node\Stmt;

use _PhpScopereb8678af2407\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScopereb8678af2407\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
