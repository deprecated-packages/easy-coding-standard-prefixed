<?php

declare (strict_types=1);
namespace _PhpScoper64ca614e27fd\PhpParser\Node\Expr;

use _PhpScoper64ca614e27fd\PhpParser\Node\Expr;
class YieldFrom extends \_PhpScoper64ca614e27fd\PhpParser\Node\Expr
{
    /** @var Expr Expression to yield from */
    public $expr;
    /**
     * Constructs an "yield from" node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper64ca614e27fd\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_YieldFrom';
    }
}
