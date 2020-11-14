<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Node\Expr;

use _PhpScoperb09c3ec8e01a\PhpParser\Node;
class Throw_ extends \_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs a throw expression node.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperb09c3ec8e01a\PhpParser\Node\Expr $expr, array $attributes = [])
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
