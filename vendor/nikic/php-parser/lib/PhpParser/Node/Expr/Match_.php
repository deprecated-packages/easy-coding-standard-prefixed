<?php

declare (strict_types=1);
namespace _PhpScoperb26833cc184d\PhpParser\Node\Expr;

use _PhpScoperb26833cc184d\PhpParser\Node;
use _PhpScoperb26833cc184d\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScoperb26833cc184d\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScoperb26833cc184d\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
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
