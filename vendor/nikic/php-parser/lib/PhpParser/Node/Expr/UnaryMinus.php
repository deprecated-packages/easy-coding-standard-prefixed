<?php

declare (strict_types=1);
namespace _PhpScoper9885c8c176c7\PhpParser\Node\Expr;

use _PhpScoper9885c8c176c7\PhpParser\Node\Expr;
class UnaryMinus extends \_PhpScoper9885c8c176c7\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a unary minus node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper9885c8c176c7\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_UnaryMinus';
    }
}
