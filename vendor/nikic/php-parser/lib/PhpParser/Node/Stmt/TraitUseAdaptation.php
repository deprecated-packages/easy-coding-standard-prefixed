<?php

declare (strict_types=1);
namespace _PhpScoper967c4b7e296e\PhpParser\Node\Stmt;

use _PhpScoper967c4b7e296e\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper967c4b7e296e\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
