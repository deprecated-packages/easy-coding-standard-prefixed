<?php

declare (strict_types=1);
namespace _PhpScoperfcf15c26e033\PhpParser\Node;

use _PhpScoperfcf15c26e033\PhpParser\Node;
use _PhpScoperfcf15c26e033\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoperfcf15c26e033\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoperfcf15c26e033\PhpParser\Node\Expr $body, array $attributes = [])
    {
        $this->conds = $conds;
        $this->body = $body;
        $this->attributes = $attributes;
    }
    public function getSubNodeNames() : array
    {
        return ['conds', 'body'];
    }
    public function getType() : string
    {
        return 'MatchArm';
    }
}
