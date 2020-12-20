<?php

declare (strict_types=1);
namespace _PhpScopere205696a9dd6\PhpParser\Node\Expr;

use _PhpScopere205696a9dd6\PhpParser\Node;
use _PhpScopere205696a9dd6\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScopere205696a9dd6\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScopere205696a9dd6\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
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
