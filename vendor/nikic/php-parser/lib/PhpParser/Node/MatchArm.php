<?php

declare (strict_types=1);
namespace _PhpScoper279cf54b77ad\PhpParser\Node;

use _PhpScoper279cf54b77ad\PhpParser\Node;
use _PhpScoper279cf54b77ad\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoper279cf54b77ad\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoper279cf54b77ad\PhpParser\Node\Expr $body, array $attributes = [])
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
