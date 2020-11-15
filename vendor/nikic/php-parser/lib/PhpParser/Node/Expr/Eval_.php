<?php

declare (strict_types=1);
namespace _PhpScoper70072c07b02b\PhpParser\Node\Expr;

use _PhpScoper70072c07b02b\PhpParser\Node\Expr;
class Eval_ extends \_PhpScoper70072c07b02b\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs an eval() node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper70072c07b02b\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_Eval';
    }
}
