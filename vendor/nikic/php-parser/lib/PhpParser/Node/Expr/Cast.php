<?php

declare (strict_types=1);
namespace _PhpScoper13133e188f67\PhpParser\Node\Expr;

use _PhpScoper13133e188f67\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScoper13133e188f67\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper13133e188f67\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
}
