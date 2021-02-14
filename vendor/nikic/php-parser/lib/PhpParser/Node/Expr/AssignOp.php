<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser\Node\Expr;

use _PhpScoperf361a7d70552\PhpParser\Node\Expr;
abstract class AssignOp extends \_PhpScoperf361a7d70552\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs a compound assignment operation node.
     *
     * @param Expr  $var        Variable
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperf361a7d70552\PhpParser\Node\Expr $var, \_PhpScoperf361a7d70552\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['var', 'expr'];
    }
}
