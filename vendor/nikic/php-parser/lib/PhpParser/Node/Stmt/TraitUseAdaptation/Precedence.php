<?php

declare (strict_types=1);
namespace _PhpScoper57272265e1c9\PhpParser\Node\Stmt\TraitUseAdaptation;

use _PhpScoper57272265e1c9\PhpParser\Node;
class Precedence extends \_PhpScoper57272265e1c9\PhpParser\Node\Stmt\TraitUseAdaptation
{
    /** @var Node\Name[] Overwritten traits */
    public $insteadof;
    /**
     * Constructs a trait use precedence adaptation node.
     *
     * @param Node\Name              $trait       Trait name
     * @param string|Node\Identifier $method      Method name
     * @param Node\Name[]            $insteadof   Overwritten traits
     * @param array                  $attributes  Additional attributes
     */
    public function __construct(\_PhpScoper57272265e1c9\PhpParser\Node\Name $trait, $method, array $insteadof, array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->trait = $trait;
        $this->method = \is_string($method) ? new \_PhpScoper57272265e1c9\PhpParser\Node\Identifier($method) : $method;
        $this->insteadof = $insteadof;
    }
    public function getSubNodeNames() : array
    {
        return ['trait', 'method', 'insteadof'];
    }
    public function getType() : string
    {
        return 'Stmt_TraitUseAdaptation_Precedence';
    }
}
