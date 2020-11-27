<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\Node\Expr;

use _PhpScoper578a67c80b2b\PhpParser\Node;
use _PhpScoper578a67c80b2b\PhpParser\Node\Expr;
use _PhpScoper578a67c80b2b\PhpParser\Node\Identifier;
class StaticCall extends \_PhpScoper578a67c80b2b\PhpParser\Node\Expr
{
    /** @var Node\Name|Expr Class name */
    public $class;
    /** @var Identifier|Expr Method name */
    public $name;
    /** @var Node\Arg[] Arguments */
    public $args;
    /**
     * Constructs a static method call node.
     *
     * @param Node\Name|Expr         $class      Class name
     * @param string|Identifier|Expr $name       Method name
     * @param Node\Arg[]             $args       Arguments
     * @param array                  $attributes Additional attributes
     */
    public function __construct($class, $name, array $args = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->name = \is_string($name) ? new \_PhpScoper578a67c80b2b\PhpParser\Node\Identifier($name) : $name;
        $this->args = $args;
    }
    public function getSubNodeNames() : array
    {
        return ['class', 'name', 'args'];
    }
    public function getType() : string
    {
        return 'Expr_StaticCall';
    }
}
