<?php

declare (strict_types=1);
namespace _PhpScoper1103e00fb46b\PhpParser\Node\Stmt;

use _PhpScoper1103e00fb46b\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper1103e00fb46b\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
