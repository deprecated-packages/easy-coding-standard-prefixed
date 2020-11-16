<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Node\Expr;

use _PhpScoperedc2e0c967db\PhpParser\Node\Expr;
use _PhpScoperedc2e0c967db\PhpParser\Node\Identifier;
class PropertyFetch extends \_PhpScoperedc2e0c967db\PhpParser\Node\Expr
{
    /** @var Expr Variable holding object */
    public $var;
    /** @var Identifier|Expr Property name */
    public $name;
    /**
     * Constructs a function call node.
     *
     * @param Expr                   $var        Variable holding object
     * @param string|Identifier|Expr $name       Property name
     * @param array                  $attributes Additional attributes
     */
    public function __construct(\_PhpScoperedc2e0c967db\PhpParser\Node\Expr $var, $name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new \_PhpScoperedc2e0c967db\PhpParser\Node\Identifier($name) : $name;
    }
    public function getSubNodeNames() : array
    {
        return ['var', 'name'];
    }
    public function getType() : string
    {
        return 'Expr_PropertyFetch';
    }
}
