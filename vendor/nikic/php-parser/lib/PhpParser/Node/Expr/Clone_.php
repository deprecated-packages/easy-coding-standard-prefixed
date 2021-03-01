<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def\PhpParser\Node\Expr;

use _PhpScoperf3dc21757def\PhpParser\Node\Expr;
class Clone_ extends \_PhpScoperf3dc21757def\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a clone node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperf3dc21757def\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_Clone';
    }
}
