<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Node\Expr;

use _PhpScoperd301db66c80c\PhpParser\Node\Expr;
use _PhpScoperd301db66c80c\PhpParser\Node\Name;
class Instanceof_ extends \_PhpScoperd301db66c80c\PhpParser\Node\Expr
{
    /** @var Expr Expression */
    public $expr;
    /** @var Name|Expr Class name */
    public $class;
    /**
     * Constructs an instanceof check node.
     *
     * @param Expr      $expr       Expression
     * @param Name|Expr $class      Class name
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoperd301db66c80c\PhpParser\Node\Expr $expr, $class, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->expr = $expr;
        $this->class = $class;
    }
    public function getSubNodeNames() : array
    {
        return ['expr', 'class'];
    }
    public function getType() : string
    {
        return 'Expr_Instanceof';
    }
}
