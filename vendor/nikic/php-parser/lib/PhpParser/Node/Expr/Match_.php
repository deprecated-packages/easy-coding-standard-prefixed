<?php

declare (strict_types=1);
namespace _PhpScoper7f5523334c1b\PhpParser\Node\Expr;

use _PhpScoper7f5523334c1b\PhpParser\Node;
use _PhpScoper7f5523334c1b\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScoper7f5523334c1b\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScoper7f5523334c1b\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
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
