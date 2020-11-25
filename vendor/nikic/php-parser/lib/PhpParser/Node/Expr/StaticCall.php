<?php

declare (strict_types=1);
namespace _PhpScoper418afc2f157c\PhpParser\Node\Expr;

use _PhpScoper418afc2f157c\PhpParser\Node;
use _PhpScoper418afc2f157c\PhpParser\Node\Expr;
use _PhpScoper418afc2f157c\PhpParser\Node\Identifier;
class StaticCall extends \_PhpScoper418afc2f157c\PhpParser\Node\Expr
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
        $this->name = \is_string($name) ? new \_PhpScoper418afc2f157c\PhpParser\Node\Identifier($name) : $name;
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
