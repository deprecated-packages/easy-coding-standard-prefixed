<?php

declare (strict_types=1);
namespace _PhpScopera4be459e5e3d\PhpParser\Node;

use _PhpScopera4be459e5e3d\PhpParser\Node;
use _PhpScopera4be459e5e3d\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScopera4be459e5e3d\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScopera4be459e5e3d\PhpParser\Node\Expr $body, array $attributes = [])
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
