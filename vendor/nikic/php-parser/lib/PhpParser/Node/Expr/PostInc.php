<?php

declare (strict_types=1);
namespace _PhpScoper992f4af8b9e0\PhpParser\Node\Expr;

use _PhpScoper992f4af8b9e0\PhpParser\Node\Expr;
class PostInc extends \_PhpScoper992f4af8b9e0\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a post increment node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper992f4af8b9e0\PhpParser\Node\Expr $var, array $attributes = [])
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
        return 'Expr_PostInc';
    }
}
