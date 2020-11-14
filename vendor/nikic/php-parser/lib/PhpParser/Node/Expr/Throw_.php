<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\Node\Expr;

use _PhpScoper229e8121cf9f\PhpParser\Node;
class Throw_ extends \_PhpScoper229e8121cf9f\PhpParser\Node\Expr
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs a throw expression node.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoper229e8121cf9f\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
    public function getType() : string
    {
        return 'Expr_Throw';
    }
}
