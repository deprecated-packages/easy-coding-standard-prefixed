<?php

declare (strict_types=1);
namespace _PhpScoper7574e8786845\PhpParser\Node\Expr;

use _PhpScoper7574e8786845\PhpParser\Node\Expr;
class BooleanNot extends \_PhpScoper7574e8786845\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a boolean not node.
     *
     * @param Expr $expr       Expression
     * @param array               $attributes Additional attributes
     */
    public function __construct(\_PhpScoper7574e8786845\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_BooleanNot';
    }
}
