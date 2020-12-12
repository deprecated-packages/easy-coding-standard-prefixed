<?php

declare (strict_types=1);
namespace _PhpScoperef870243cfdb\PhpParser\Node\Stmt;

use _PhpScoperef870243cfdb\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperef870243cfdb\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
