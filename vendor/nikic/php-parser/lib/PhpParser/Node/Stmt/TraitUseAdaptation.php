<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser\Node\Stmt;

use _PhpScoperf361a7d70552\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperf361a7d70552\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
