<?php

declare (strict_types=1);
namespace _PhpScoperd301db66c80c\PhpParser\Node;

use _PhpScoperd301db66c80c\PhpParser\Node;
use _PhpScoperd301db66c80c\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoperd301db66c80c\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoperd301db66c80c\PhpParser\Node\Expr $body, array $attributes = [])
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
