<?php

declare (strict_types=1);
namespace _PhpScopera23ebff5477f\PhpParser\Node\Expr;

use _PhpScopera23ebff5477f\PhpParser\Node;
use _PhpScopera23ebff5477f\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScopera23ebff5477f\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScopera23ebff5477f\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->cond = $cond;
        $this->arms = $arms;
    }
    public function getSubNodeNames() : array
    {
        return ['cond', 'arms'];
    }
    public function getType() : string
    {
        return 'Expr_Match';
    }
}
