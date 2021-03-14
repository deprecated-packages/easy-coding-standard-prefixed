<?php

declare (strict_types=1);
namespace _PhpScopera1f11cc38772\PhpParser\Node\Expr;

use _PhpScopera1f11cc38772\PhpParser\Node\Expr;
class PostDec extends \_PhpScopera1f11cc38772\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a post decrement node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScopera1f11cc38772\PhpParser\Node\Expr $var, array $attributes = [])
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
