<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b\PhpParser\Node\Stmt;

use _PhpScopera40fc53e636b\PhpParser\Node;
class Echo_ extends \_PhpScopera40fc53e636b\PhpParser\Node\Stmt
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
