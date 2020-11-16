<?php

declare (strict_types=1);
namespace _PhpScoper6d28bdf6a7f9\PhpParser\Node\Expr;

use _PhpScoper6d28bdf6a7f9\PhpParser\Node\Arg;
use _PhpScoper6d28bdf6a7f9\PhpParser\Node\Expr;
use _PhpScoper6d28bdf6a7f9\PhpParser\Node\Identifier;
class NullsafeMethodCall extends \_PhpScoper6d28bdf6a7f9\PhpParser\Node\Expr
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
    public function __construct(\_PhpScoper6d28bdf6a7f9\PhpParser\Node\Expr $var, $name, array $args = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new \_PhpScoper6d28bdf6a7f9\PhpParser\Node\Identifier($name) : $name;
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
