<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PhpParser\Node\Expr;

use _PhpScopera4fc793dae73\PhpParser\Node\Expr;
use _PhpScopera4fc793dae73\PhpParser\Node\Identifier;
class NullsafePropertyFetch extends \_PhpScopera4fc793dae73\PhpParser\Node\Expr
{
    /** @var Expr Variable holding object */
    public $var;
    /** @var Identifier|Expr Property name */
    public $name;
    /**
     * Constructs a nullsafe property fetch node.
     *
     * @param Expr                   $var        Variable holding object
     * @param string|Identifier|Expr $name       Property name
     * @param array                  $attributes Additional attributes
     */
    public function __construct(\_PhpScopera4fc793dae73\PhpParser\Node\Expr $var, $name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new \_PhpScopera4fc793dae73\PhpParser\Node\Identifier($name) : $name;
    }
    public function getSubNodeNames() : array
    {
        return ['var', 'name'];
    }
    public function getType() : string
    {
        return 'Expr_NullsafePropertyFetch';
    }
}
