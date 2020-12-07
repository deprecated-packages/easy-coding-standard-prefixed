<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser\Node;

use _PhpScoperb83706991c7f\PhpParser\Node;
use _PhpScoperb83706991c7f\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoperb83706991c7f\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoperb83706991c7f\PhpParser\Node\Expr $body, array $attributes = [])
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
