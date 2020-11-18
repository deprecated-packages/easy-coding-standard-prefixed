<?php

declare (strict_types=1);
namespace _PhpScoper0270f1d35181\PhpParser\Node\Expr;

use _PhpScoper0270f1d35181\PhpParser\Node\Expr;
use _PhpScoper0270f1d35181\PhpParser\Node\Identifier;
class NullsafePropertyFetch extends \_PhpScoper0270f1d35181\PhpParser\Node\Expr
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
    public function __construct(\_PhpScoper0270f1d35181\PhpParser\Node\Expr $var, $name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new \_PhpScoper0270f1d35181\PhpParser\Node\Identifier($name) : $name;
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
