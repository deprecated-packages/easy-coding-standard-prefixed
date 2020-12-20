<?php

declare (strict_types=1);
namespace _PhpScoper7574e8786845\PhpParser\Node;

use _PhpScoper7574e8786845\PhpParser\Node;
use _PhpScoper7574e8786845\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper7574e8786845\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper7574e8786845\PhpParser\Node\Expr $body, array $attributes = [])
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
