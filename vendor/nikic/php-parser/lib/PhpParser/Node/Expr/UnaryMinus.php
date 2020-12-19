<?php

declare (strict_types=1);
namespace _PhpScoperfb2c402b972b\PhpParser\Node\Expr;

use _PhpScoperfb2c402b972b\PhpParser\Node\Expr;
class UnaryMinus extends \_PhpScoperfb2c402b972b\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a unary minus node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperfb2c402b972b\PhpParser\Node\Expr $expr, array $attributes = [])
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
