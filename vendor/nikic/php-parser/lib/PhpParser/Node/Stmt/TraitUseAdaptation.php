<?php

declare (strict_types=1);
namespace _PhpScoper37a255897161\PhpParser\Node\Stmt;

use _PhpScoper37a255897161\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper37a255897161\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
