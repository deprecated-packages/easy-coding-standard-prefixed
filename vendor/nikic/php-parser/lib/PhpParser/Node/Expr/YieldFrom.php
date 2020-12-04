<?php

declare (strict_types=1);
namespace _PhpScopera4fc793dae73\PhpParser\Node\Expr;

use _PhpScopera4fc793dae73\PhpParser\Node\Expr;
class YieldFrom extends \_PhpScopera4fc793dae73\PhpParser\Node\Expr
{
    /** @var Expr Expression to yield from */
    public $expr;
    /**
     * Constructs an "yield from" node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScopera4fc793dae73\PhpParser\Node\Expr $expr, array $attributes = [])
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
