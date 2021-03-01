<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr;

use _PhpScoperc4ea0f0bd23f\PhpParser\Node;
class Throw_ extends \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs a throw expression node.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperc4ea0f0bd23f\PhpParser\Node\Expr $expr, array $attributes = [])
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
