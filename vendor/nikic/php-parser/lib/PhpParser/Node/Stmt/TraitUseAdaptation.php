<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Node\Stmt;

use _PhpScoperecb978830f1e\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperecb978830f1e\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
