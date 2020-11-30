<?php

declare (strict_types=1);
namespace _PhpScoper246d7c16d32f\PhpParser\Node;

use _PhpScoper246d7c16d32f\PhpParser\Node;
use _PhpScoper246d7c16d32f\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper246d7c16d32f\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper246d7c16d32f\PhpParser\Node\Expr $body, array $attributes = [])
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
