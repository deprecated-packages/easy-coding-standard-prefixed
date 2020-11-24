<?php

declare (strict_types=1);
namespace _PhpScoper528afa732cbd\PhpParser\Node;

use _PhpScoper528afa732cbd\PhpParser\Node;
use _PhpScoper528afa732cbd\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper528afa732cbd\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper528afa732cbd\PhpParser\Node\Expr $body, array $attributes = [])
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
