<?php

declare (strict_types=1);
namespace _PhpScoperda2604e33acb\PhpParser\Node\Expr;

use _PhpScoperda2604e33acb\PhpParser\Node;
use _PhpScoperda2604e33acb\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScoperda2604e33acb\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScoperda2604e33acb\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
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
