<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Node;

use _PhpScoperba24099fc6fd\PhpParser\Node;
use _PhpScoperba24099fc6fd\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoperba24099fc6fd\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoperba24099fc6fd\PhpParser\Node\Expr $body, array $attributes = [])
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
