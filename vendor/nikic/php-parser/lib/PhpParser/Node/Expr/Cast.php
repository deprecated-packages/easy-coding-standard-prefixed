<?php

declare (strict_types=1);
namespace _PhpScoperb730595bc9f4\PhpParser\Node\Expr;

use _PhpScoperb730595bc9f4\PhpParser\Node\Expr;
abstract class Cast extends \_PhpScoperb730595bc9f4\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a cast node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperb730595bc9f4\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['expr'];
    }
}
