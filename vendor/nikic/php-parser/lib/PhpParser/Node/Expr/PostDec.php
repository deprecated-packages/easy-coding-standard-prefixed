<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\Node\Expr;

use _PhpScopera8f555a7493c\PhpParser\Node\Expr;
class PostDec extends \_PhpScopera8f555a7493c\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a post decrement node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScopera8f555a7493c\PhpParser\Node\Expr $var, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
    }
    public function getSubNodeNames() : array
    {
        return ['var'];
    }
    public function getType() : string
    {
        return 'Expr_PostDec';
    }
}
