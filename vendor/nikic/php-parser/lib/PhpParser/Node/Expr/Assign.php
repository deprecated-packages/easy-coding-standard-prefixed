<?php

declare (strict_types=1);
namespace _PhpScoper21763e6c7ac4\PhpParser\Node\Expr;

use _PhpScoper21763e6c7ac4\PhpParser\Node\Expr;
class Assign extends \_PhpScoper21763e6c7ac4\PhpParser\Node\Expr
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
    public function __construct(\_PhpScoper21763e6c7ac4\PhpParser\Node\Expr $var, \_PhpScoper21763e6c7ac4\PhpParser\Node\Expr $expr, array $attributes = [])
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
