<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\Node\Expr;

use _PhpScoperb458b528613f\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScoperb458b528613f\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
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
}
