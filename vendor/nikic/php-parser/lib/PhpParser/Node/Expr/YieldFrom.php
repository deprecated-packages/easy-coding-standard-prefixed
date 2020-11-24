<?php

declare (strict_types=1);
namespace _PhpScoperbd5fb781fe24\PhpParser\Node\Expr;

use _PhpScoperbd5fb781fe24\PhpParser\Node\Expr;
class YieldFrom extends \_PhpScoperbd5fb781fe24\PhpParser\Node\Expr
{
    /** @var Expr Expression to yield from */
    public $expr;
    /**
     * Constructs an "yield from" node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperbd5fb781fe24\PhpParser\Node\Expr $expr, array $attributes = [])
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
