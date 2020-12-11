<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Stmt;

use _PhpScoperb26833cc184d\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperb26833cc184d\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
