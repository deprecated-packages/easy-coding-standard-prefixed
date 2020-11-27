<?php

declare (strict_types=1);
namespace _PhpScoper08748c77fa1c\PhpParser\Node\Stmt;

use _PhpScoper08748c77fa1c\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper08748c77fa1c\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
