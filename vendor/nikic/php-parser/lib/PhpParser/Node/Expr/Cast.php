<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Node\Expr;

use _PhpScopera1f11cc38772\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScopera1f11cc38772\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScopera1f11cc38772\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
}
