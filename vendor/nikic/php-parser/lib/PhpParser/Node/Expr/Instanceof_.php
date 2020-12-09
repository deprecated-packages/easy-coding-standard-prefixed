<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9\PhpParser\Node\Expr;

use _PhpScoperdf15f2b748e9\PhpParser\Node\Expr;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Name;
class Instanceof_ extends \_PhpScoperdf15f2b748e9\PhpParser\Node\Expr
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
    public function __construct(\_PhpScoperdf15f2b748e9\PhpParser\Node\Expr $expr, $class, array $attributes = [])
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
