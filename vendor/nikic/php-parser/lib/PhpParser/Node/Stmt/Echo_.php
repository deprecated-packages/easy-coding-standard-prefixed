<?php

declare (strict_types=1);
namespace _PhpScoperd74b3ed28382\PhpParser\Node\Stmt;

use _PhpScoperd74b3ed28382\PhpParser\Node;
class Echo_ extends \_PhpScoperd74b3ed28382\PhpParser\Node\Stmt
{
    /** @var Node\Expr[] Expressions */
    public $exprs;
    /**
     * Constructs an echo node.
     *
     * @param Node\Expr[] $exprs      Expressions
     * @param array       $attributes Additional attributes
     */
    public function __construct(array $exprs, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->exprs = $exprs;
    }
    public function getSubNodeNames() : array
    {
        return ['exprs'];
    }
    public function getType() : string
    {
        return 'Stmt_Echo';
    }
}
