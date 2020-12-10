<?php

declare (strict_types=1);
namespace _PhpScoper2731c1906fe4\PhpParser\Node\Stmt;

use _PhpScoper2731c1906fe4\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper2731c1906fe4\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
