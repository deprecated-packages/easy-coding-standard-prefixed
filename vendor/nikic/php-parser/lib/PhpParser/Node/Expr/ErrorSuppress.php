<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\Node\Expr;

use _PhpScoperb458b528613f\PhpParser\Node\Expr;
class ErrorSuppress extends \_PhpScoperb458b528613f\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs an error suppress node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperb458b528613f\PhpParser\Node\Expr $expr, array $attributes = [])
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
