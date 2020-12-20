<?php

declare (strict_types=1);
namespace _PhpScoper5384d7276e1f\PhpParser\Node\Stmt;

use _PhpScoper5384d7276e1f\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper5384d7276e1f\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
