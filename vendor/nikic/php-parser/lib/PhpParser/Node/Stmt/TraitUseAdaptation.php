<?php

declare (strict_types=1);
namespace _PhpScoper17bb67c99ade\PhpParser\Node\Stmt;

use _PhpScoper17bb67c99ade\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper17bb67c99ade\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
