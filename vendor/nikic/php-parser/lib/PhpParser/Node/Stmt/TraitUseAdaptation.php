<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser\Node\Stmt;

use _PhpScoperc95ae4bf942a\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc95ae4bf942a\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
