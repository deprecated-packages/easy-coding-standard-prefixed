<?php

declare (strict_types=1);
namespace _PhpScoper3fa05b4669af\PhpParser\Node\Expr;

use _PhpScoper3fa05b4669af\PhpParser\Node;
use _PhpScoper3fa05b4669af\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScoper3fa05b4669af\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScoper3fa05b4669af\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
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
