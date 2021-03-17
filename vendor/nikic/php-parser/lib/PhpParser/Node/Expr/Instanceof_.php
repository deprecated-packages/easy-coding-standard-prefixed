<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\Node\Expr;

use _PhpScoper842c7347e6be\PhpParser\Node\Expr;
use _PhpScoper842c7347e6be\PhpParser\Node\Name;
class Instanceof_ extends \_PhpScoper842c7347e6be\PhpParser\Node\Expr
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
    public function __construct(\_PhpScoper842c7347e6be\PhpParser\Node\Expr $expr, $class, array $attributes = [])
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
