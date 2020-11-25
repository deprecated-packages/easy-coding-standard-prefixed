<?php

declare (strict_types=1);
namespace _PhpScoperaa402dd1b1f1\PhpParser\Node;

use _PhpScoperaa402dd1b1f1\PhpParser\Node;
use _PhpScoperaa402dd1b1f1\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoperaa402dd1b1f1\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoperaa402dd1b1f1\PhpParser\Node\Expr $body, array $attributes = [])
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
