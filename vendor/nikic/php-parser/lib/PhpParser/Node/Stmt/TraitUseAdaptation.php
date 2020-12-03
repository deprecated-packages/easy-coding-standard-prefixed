<?php

declare (strict_types=1);
namespace _PhpScoperba5852cc6147\PhpParser\Node\Stmt;

use _PhpScoperba5852cc6147\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperba5852cc6147\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
