<?php

declare (strict_types=1);
namespace _PhpScoper8a7636b3fdaf\PhpParser\Node\Stmt;

use _PhpScoper8a7636b3fdaf\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper8a7636b3fdaf\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
