<?php

declare (strict_types=1);
namespace _PhpScoperb6ccec8ab642\PhpParser\Node;

use _PhpScoperb6ccec8ab642\PhpParser\Node;
use _PhpScoperb6ccec8ab642\PhpParser\NodeAbstract;
class MatchArm extends \_PhpScoperb6ccec8ab642\PhpParser\NodeAbstract
{
    /** @var null|Node\Expr[] */
    public $conds;
    /** @var Node\Expr */
    public $body;
    /**
     * @param null|Node\Expr[] $conds
     */
    public function __construct($conds, \_PhpScoperb6ccec8ab642\PhpParser\Node\Expr $body, array $attributes = [])
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
