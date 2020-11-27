<?php

declare (strict_types=1);
namespace _PhpScoper578a67c80b2b\PhpParser\Node;

use _PhpScoper578a67c80b2b\PhpParser\Node;
use _PhpScoper578a67c80b2b\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper578a67c80b2b\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper578a67c80b2b\PhpParser\Node\Expr $body, array $attributes = [])
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
