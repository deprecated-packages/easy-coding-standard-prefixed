<?php

declare (strict_types=1);
namespace _PhpScoper8db4616aa69d\PhpParser\Node;

use _PhpScoper8db4616aa69d\PhpParser\Node;
use _PhpScoper8db4616aa69d\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper8db4616aa69d\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper8db4616aa69d\PhpParser\Node\Expr $body, array $attributes = [])
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
