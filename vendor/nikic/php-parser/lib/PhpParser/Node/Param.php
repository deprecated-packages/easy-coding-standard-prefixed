<?php

declare (strict_types=1);
namespace _PhpScopercda2b863d098\PhpParser\Node;

use _PhpScopercda2b863d098\PhpParser\NodeAbstract;
class Param extends \_PhpScopercda2b863d098\PhpParser\NodeAbstract
{
    /** @var null|Identifier|Name|NullableType|UnionType Type declaration */
    public $type;
    /** @var bool Whether parameter is passed by reference */
    public $byRef;
    /** @var bool Whether this is a variadic argument */
    public $variadic;
    /** @var Expr\Variable|Expr\Error Parameter variable */
    public $var;
    /** @var null|Expr Default value */
    public $default;
    /** @var int */
    public $flags;
    /**
     * Constructs a parameter node.
     *
     * @param Expr\Variable|Expr\Error                           $var        Parameter variable
     * @param null|Expr                                          $default    Default value
     * @param null|string|Identifier|Name|NullableType|UnionType $type       Type declaration
     * @param bool                                               $byRef      Whether is passed by reference
     * @param bool                                               $variadic   Whether this is a variadic argument
     * @param array                                              $flags      Optional visibility flags
     * @param array                                              $attributes Additional attributes
     */
    public function __construct($var, \_PhpScopercda2b863d098\PhpParser\Node\Expr $default = null, $type = null, bool $byRef = \false, bool $variadic = \false, array $attributes = [], int $flags = 0)
    {
        $this->attributes = $attributes;
        $this->type = \is_string($type) ? new \_PhpScopercda2b863d098\PhpParser\Node\Identifier($type) : $type;
        $this->byRef = $byRef;
        $this->variadic = $variadic;
        $this->var = $var;
        $this->default = $default;
        $this->flags = $flags;
    }
    public function getSubNodeNames() : array
    {
        return ['flags', 'type', 'byRef', 'variadic', 'var', 'default'];
    }
    public function getType() : string
    {
        return 'Param';
    }
}
