<?php

declare (strict_types=1);
namespace _PhpScoper807f8e74693b\PhpParser\Node\Expr;

use _PhpScoper807f8e74693b\PhpParser\Node\Arg;
use _PhpScoper807f8e74693b\PhpParser\Node\Expr;
use _PhpScoper807f8e74693b\PhpParser\Node\Identifier;
class MethodCall extends \_PhpScoper807f8e74693b\PhpParser\Node\Expr
{
    /** @var Expr Variable holding object */
    public $var;
    /** @var Identifier|Expr Method name */
    public $name;
    /** @var Arg[] Arguments */
    public $args;
    /**
     * Constructs a function call node.
     *
     * @param Expr                   $var        Variable holding object
     * @param string|Identifier|Expr $name       Method name
     * @param Arg[]                  $args       Arguments
     * @param array                  $attributes Additional attributes
     */
    public function __construct(\_PhpScoper807f8e74693b\PhpParser\Node\Expr $var, $name, array $args = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new \_PhpScoper807f8e74693b\PhpParser\Node\Identifier($name) : $name;
        $this->args = $args;
    }
    public function getSubNodeNames() : array
    {
        return ['var', 'name', 'args'];
    }
    public function getType() : string
    {
        return 'Expr_MethodCall';
    }
}
