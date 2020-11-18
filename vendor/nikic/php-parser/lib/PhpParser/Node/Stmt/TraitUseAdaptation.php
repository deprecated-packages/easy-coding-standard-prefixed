<?php

declare (strict_types=1);
namespace _PhpScoperf77bffce0320\PhpParser\Node\Stmt;

use _PhpScoperf77bffce0320\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperf77bffce0320\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
