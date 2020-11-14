<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\Node;

use _PhpScoperddde3ba4aebc\PhpParser\Node;
use _PhpScoperddde3ba4aebc\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoperddde3ba4aebc\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoperddde3ba4aebc\PhpParser\Node\Expr $body, array $attributes = [])
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
