<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Node\Expr;

use _PhpScoperedc2e0c967db\PhpParser\Node;
class Throw_ extends \_PhpScoperedc2e0c967db\PhpParser\Node\Expr
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs a throw expression node.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperedc2e0c967db\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_Throw';
    }
}
