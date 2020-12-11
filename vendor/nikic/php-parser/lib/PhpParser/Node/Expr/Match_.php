<?php

declare (strict_types=1);
namespace _PhpScoper3b1d73f28e67\PhpParser\Node\Expr;

use _PhpScoper3b1d73f28e67\PhpParser\Node;
use _PhpScoper3b1d73f28e67\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScoper3b1d73f28e67\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScoper3b1d73f28e67\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
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
