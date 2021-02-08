<?php

declare (strict_types=1);
namespace _PhpScoper326af2119eba\PhpParser\Node\Expr;

use _PhpScoper326af2119eba\PhpParser\Node\Expr;
class Empty_ extends \_PhpScoper326af2119eba\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /**
     * Constructs an empty() node.
     *
     * @param Expr  $expr       Expression
     * @param array $attributes Additional attributes
     */
    public function __construct(\_PhpScoper326af2119eba\PhpParser\Node\Expr $expr, array $attributes = [])
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
        return 'Expr_Empty';
    }
}
