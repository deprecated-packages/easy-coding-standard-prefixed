<?php

declare (strict_types=1);
namespace _PhpScoper13160cf3462c\PhpParser\Node\Expr;

use _PhpScoper13160cf3462c\PhpParser\Node\Expr;
class PostInc extends \_PhpScoper13160cf3462c\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a post increment node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper13160cf3462c\PhpParser\Node\Expr $var, array $attributes = [])
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
