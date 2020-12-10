<?php

declare (strict_types=1);
namespace _PhpScoper58a0a169dcfb\PhpParser\Node\Expr;

use _PhpScoper58a0a169dcfb\PhpParser\Node\Expr;
class ErrorSuppress extends \_PhpScoper58a0a169dcfb\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs an error suppress node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper58a0a169dcfb\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_ErrorSuppress';
    }
}
