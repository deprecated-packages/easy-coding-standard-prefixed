<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr;

use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperdc8fbcd7c69d\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
}
