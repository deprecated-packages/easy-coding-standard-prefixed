<?php

declare (strict_types=1);
namespace _PhpScoper8acb416c2f5a\PhpParser\Node;

use _PhpScoper8acb416c2f5a\PhpParser\Node;
use _PhpScoper8acb416c2f5a\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper8acb416c2f5a\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper8acb416c2f5a\PhpParser\Node\Expr $body, array $attributes = [])
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
