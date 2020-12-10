<?php

declare (strict_types=1);
namespace _PhpScopera1a51450b61d\PhpParser\Node\Expr;

use _PhpScopera1a51450b61d\PhpParser\Node\Expr;
class Empty_ extends \_PhpScopera1a51450b61d\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs an empty() node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScopera1a51450b61d\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_Empty';
    }
}
