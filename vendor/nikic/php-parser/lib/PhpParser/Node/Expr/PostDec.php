<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\Node\Expr;

use _PhpScoper578a67c80b2b\PhpParser\Node\Expr;
class PostDec extends \_PhpScoper578a67c80b2b\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a post decrement node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper578a67c80b2b\PhpParser\Node\Expr $var, array $attributes = [])
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
