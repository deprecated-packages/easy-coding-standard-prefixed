<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Node\Expr;

use _PhpScoperd301db66c80c\PhpParser\Node\Arg;
use _PhpScoperd301db66c80c\PhpParser\Node\Expr;
use _PhpScoperd301db66c80c\PhpParser\Node\Identifier;
class NullsafeMethodCall extends \_PhpScoperd301db66c80c\PhpParser\Node\Expr
{
    /** @var Expr Variable holding object */
    public $var;
    /** @var Identifier|Expr Method name */
    public $name;
    /** @var Arg[] Arguments */
    public $args;
    /**
     * Constructs a nullsafe method call node.
     *
     * @param Expr                   $var        Variable holding object
     * @param string|Identifier|Expr $name       Method name
     * @param Arg[]                  $args       Arguments
     * @param array                  $attributes Additional attributes
     */
    public function __construct(\_PhpScoperd301db66c80c\PhpParser\Node\Expr $var, $name, array $args = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new \_PhpScoperd301db66c80c\PhpParser\Node\Identifier($name) : $name;
        $this->args = $args;
    }
    public function getSubNodeNames() : array
    {
        return ['var', 'name', 'args'];
    }
    public function getType() : string
    {
        return 'Expr_NullsafeMethodCall';
    }
}
