<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Node\Stmt;

use _PhpScoperba24099fc6fd\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
