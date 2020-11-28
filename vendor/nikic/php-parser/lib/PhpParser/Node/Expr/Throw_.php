<?php

declare (strict_types=1);
namespace _PhpScoperfcce67077a55\PhpParser\Node\Expr;

use _PhpScoperfcce67077a55\PhpParser\Node;
class Throw_ extends \_PhpScoperfcce67077a55\PhpParser\Node\Expr
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs a throw expression node.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperfcce67077a55\PhpParser\Node\Expr $expr, array $attributes = [])
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
