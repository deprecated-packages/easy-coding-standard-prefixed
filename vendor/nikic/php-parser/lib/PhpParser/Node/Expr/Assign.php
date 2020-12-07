<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Node\Expr;

use _PhpScoperb73f9e44f4eb\PhpParser\Node\Expr;
class Assign extends \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr
{
    /** @var Expr Variable */
    public $var;
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs an assignment node.
     *
     * @param Expr  $var        Variable
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr $var, \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr $expr, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->expr = $expr;
    }
    public function getSubNodeNames() : array
    {
        return ['var', 'expr'];
    }
    public function getType() : string
    {
        return 'Expr_Assign';
    }
}
