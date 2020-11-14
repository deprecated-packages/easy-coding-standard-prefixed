<?php

declare (strict_types=1);
namespace _PhpScoper229e8121cf9f\PhpParser\Builder;

use _PhpScoper229e8121cf9f\PhpParser\Builder;
use _PhpScoper229e8121cf9f\PhpParser\BuilderHelpers;
use _PhpScoper229e8121cf9f\PhpParser\Node;
use _PhpScoper229e8121cf9f\PhpParser\Node\Stmt;
class TraitUse implements \_PhpScoper229e8121cf9f\PhpParser\Builder
{
    protected $traits = [];
    protected $adaptations = [];
    /**
     * Creates a trait use builder.
     *
     * @param Node\Name|string ...$traits Names of used traits
     */
    public function __construct(...$traits)
    {
        foreach ($traits as $trait) {
            $this->and($trait);
        }
    }
    /**
     * Adds used trait.
     *
     * @param Node\Name|string $trait Trait name
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function and($trait)
    {
        $this->traits[] = \_PhpScoper229e8121cf9f\PhpParser\BuilderHelpers::normalizeName($trait);
        return $this;
    }
    /**
     * Adds trait adaptation.
     *
     * @param Stmt\TraitUseAdaptation|Builder\TraitUseAdaptation $adaptation Trait adaptation
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function with($adaptation)
    {
        $adaptation = \_PhpScoper229e8121cf9f\PhpParser\BuilderHelpers::normalizeNode($adaptation);
        if (!$adaptation instanceof \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\TraitUseAdaptation) {
            throw new \LogicException('Adaptation must have type TraitUseAdaptation');
        }
        $this->adaptations[] = $adaptation;
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper229e8121cf9f\PhpParser\Node
    {
        return new \_PhpScoper229e8121cf9f\PhpParser\Node\Stmt\TraitUse($this->traits, $this->adaptations);
    }
}
