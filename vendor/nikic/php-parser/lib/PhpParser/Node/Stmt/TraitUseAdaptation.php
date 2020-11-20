<?php

declare (strict_types=1);
namespace _PhpScoperc753ccca5a0c\PhpParser\Node\Stmt;

use _PhpScoperc753ccca5a0c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperc753ccca5a0c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
