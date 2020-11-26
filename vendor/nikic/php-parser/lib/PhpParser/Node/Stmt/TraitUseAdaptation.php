<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PhpParser\Node\Stmt;

use _PhpScoper4a718ec9156e\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoper4a718ec9156e\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
