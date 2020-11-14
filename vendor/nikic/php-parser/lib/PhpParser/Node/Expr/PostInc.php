<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Node\Expr;

use _PhpScoperecb978830f1e\PhpParser\Node\Expr;
class PostInc extends \_PhpScoperecb978830f1e\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /**
     * Constructs a post increment node.
     *
     * @param Expr  $var        Variable
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperecb978830f1e\PhpParser\Node\Expr $var, array $attributes = [])
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
