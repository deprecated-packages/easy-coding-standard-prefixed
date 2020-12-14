<?php

declare (strict_types=1);
namespace _PhpScoper6224e3b16fcc\PhpParser\Node\Stmt;

use _PhpScoper6224e3b16fcc\PhpParser\Node;
class Switch_ extends \_PhpScoper6224e3b16fcc\PhpParser\Node\Stmt
{
    /** @var Node\Expr Condition */
    public $cond;
    /** @var Case_[] Case list */
    public $cases;
    /**
     * Constructs a case node.
     *
     * @param Node\Expr $cond       Condition
     * @param Case_[]   $cases      Case list
     * @param array     $attributes Additional attributes
     */
    public function __construct(\_PhpScoper6224e3b16fcc\PhpParser\Node\Expr $cond, array $cases, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->cond = $cond;
        $this->cases = $cases;
    }
    public function getSubNodeNames() : array
    {
        return ['cond', 'cases'];
    }
    public function getType() : string
    {
        return 'Stmt_Switch';
    }
}
