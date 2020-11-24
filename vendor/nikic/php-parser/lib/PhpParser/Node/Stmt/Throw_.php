<?php

declare (strict_types=1);
namespace _PhpScoperf3d5f0921050\PhpParser\Node\Stmt;

use _PhpScoperf3d5f0921050\PhpParser\Node;
class Throw_ extends \_PhpScoperf3d5f0921050\PhpParser\Node\Stmt
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs a legacy throw statement node.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperf3d5f0921050\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Stmt_Throw';
    }
}
