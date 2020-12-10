<?php

declare (strict_types=1);
namespace _PhpScopera40fc53e636b\PhpParser\Node;

use _PhpScopera40fc53e636b\PhpParser\Node;
use _PhpScopera40fc53e636b\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScopera40fc53e636b\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScopera40fc53e636b\PhpParser\Node\Expr $body, array $attributes = [])
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
