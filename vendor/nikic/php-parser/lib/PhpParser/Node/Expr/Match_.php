<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\Node\Expr;

use _PhpScoperca8ca183ac38\PhpParser\Node;
use _PhpScoperca8ca183ac38\PhpParser\Node\MatchArm;
class Match_ extends \_PhpScoperca8ca183ac38\PhpParser\Node\Expr
{
    /** @var Node\Expr */
    public $cond;
    /** @var MatchArm[] */
    public $arms;
    /**
     * @param MatchArm[] $arms
     */
    public function __construct(\_PhpScoperca8ca183ac38\PhpParser\Node\Expr $cond, array $arms = [], array $attributes = [])
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
