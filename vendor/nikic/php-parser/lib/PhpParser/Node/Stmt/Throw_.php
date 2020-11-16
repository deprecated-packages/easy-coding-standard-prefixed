<?php

declare (strict_types=1);
namespace _PhpScoper239b374a39c8\PhpParser\Node\Stmt;

use _PhpScoper239b374a39c8\PhpParser\Node;
class Throw_ extends \_PhpScoper239b374a39c8\PhpParser\Node\Stmt
{
    /** @var Node\Expr Expression */
    public $expr;
    /**
     * Constructs a legacy throw statement node.
     *
     * @param Node\Expr $expr       Expression
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoper239b374a39c8\PhpParser\Node\Expr $expr, array $attributes = [])
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
