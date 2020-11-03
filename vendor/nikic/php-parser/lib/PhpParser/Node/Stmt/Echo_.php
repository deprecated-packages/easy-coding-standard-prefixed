<?php

declare (strict_types=1);
namespace _PhpScoper83a475a0590e\PhpParser\Node\Stmt;

use _PhpScoper83a475a0590e\PhpParser\Node;
class Echo_ extends \_PhpScoper83a475a0590e\PhpParser\Node\Stmt
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
