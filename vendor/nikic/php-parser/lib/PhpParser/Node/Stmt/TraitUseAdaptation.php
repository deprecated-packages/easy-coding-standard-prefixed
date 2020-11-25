<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\Node\Stmt;

use _PhpScoperca8ca183ac38\PhpParser\Node;
abstract class TraitUseAdaptation extends \_PhpScoperca8ca183ac38\PhpParser\Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
