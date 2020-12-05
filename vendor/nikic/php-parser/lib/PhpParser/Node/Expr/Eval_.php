<?php

declare (strict_types=1);
namespace _PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr;

use _PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr;
class Eval_ extends \_PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs an eval() node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper81b3ff5ab9fe\PhpParser\Node\Expr $expr, array $attributes = [])
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
