<?php

declare (strict_types=1);
namespace _PhpScoper18bd934c069f\PhpParser\Node\Expr;

use _PhpScoper18bd934c069f\PhpParser\Node;
use _PhpScoper18bd934c069f\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScoper18bd934c069f\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScoper18bd934c069f\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
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
