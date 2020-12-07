<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Node;

use _PhpScoperb73f9e44f4eb\PhpParser\Node;
use _PhpScoperb73f9e44f4eb\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoperb73f9e44f4eb\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoperb73f9e44f4eb\PhpParser\Node\Expr $body, array $attributes = [])
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
