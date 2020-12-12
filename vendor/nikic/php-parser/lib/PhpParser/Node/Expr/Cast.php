<?php

declare (strict_types=1);
namespace _PhpScoper8a05d21c15c9\PhpParser\Node\Expr;

use _PhpScoper8a05d21c15c9\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScoper8a05d21c15c9\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper8a05d21c15c9\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
}
