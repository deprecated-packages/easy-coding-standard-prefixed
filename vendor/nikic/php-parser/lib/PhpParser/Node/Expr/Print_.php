<?php

declare (strict_types=1);
namespace _PhpScoper7c1f54fd2f3a\PhpParser\Node\Expr;

use _PhpScoper7c1f54fd2f3a\PhpParser\Node\Expr;
class Print_ extends \_PhpScoper7c1f54fd2f3a\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs an print() node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper7c1f54fd2f3a\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_Print';
    }
}
