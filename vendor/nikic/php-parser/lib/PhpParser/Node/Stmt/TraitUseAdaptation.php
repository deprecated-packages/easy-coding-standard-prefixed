<?php

declare (strict_types=1);
namespace _PhpScoperf053e888b664\PhpParser\Node\Stmt;

use _PhpScoperf053e888b664\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperf053e888b664\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
