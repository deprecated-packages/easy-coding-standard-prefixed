<?php

declare (strict_types=1);
namespace _PhpScoper8db4616aa69d\PhpParser\Node\Expr;

use _PhpScoper8db4616aa69d\PhpParser\Node\Expr;
use _PhpScoper8db4616aa69d\PhpParser\Node\Identifier;
class PropertyFetch extends \_PhpScoper8db4616aa69d\PhpParser\Node\Expr
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
    public function __construct(\_PhpScoper8db4616aa69d\PhpParser\Node\Expr $var, $name, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new \_PhpScoper8db4616aa69d\PhpParser\Node\Identifier($name) : $name;
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
