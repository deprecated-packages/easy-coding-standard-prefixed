<?php

declare (strict_types=1);
namespace _PhpScoper167729fa1dde\PhpParser\Node;

use _PhpScoper167729fa1dde\PhpParser\Node;
use _PhpScoper167729fa1dde\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper167729fa1dde\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper167729fa1dde\PhpParser\Node\Expr $body, array $attributes = [])
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
