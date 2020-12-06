<?php

declare (strict_types=1);
namespace _PhpScoper3e8786a75afe\PhpParser\Node;

use _PhpScoper3e8786a75afe\PhpParser\Node;
use _PhpScoper3e8786a75afe\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper3e8786a75afe\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper3e8786a75afe\PhpParser\Node\Expr $body, array $attributes = [])
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
