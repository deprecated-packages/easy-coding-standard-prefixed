<?php

declare (strict_types=1);
namespace _PhpScoperedc2e0c967db\PhpParser\Builder;

use _PhpScoperedc2e0c967db\PhpParser\Builder;
use _PhpScoperedc2e0c967db\PhpParser\BuilderHelpers;
use _PhpScoperedc2e0c967db\PhpParser\Node;
use _PhpScoperedc2e0c967db\PhpParser\Node\Stmt;
class TraitUse implements \_PhpScoperedc2e0c967db\PhpParser\Builder
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
        $this->traits[] = \_PhpScoperedc2e0c967db\PhpParser\BuilderHelpers::normalizeName($trait);
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
        $adaptation = \_PhpScoperedc2e0c967db\PhpParser\BuilderHelpers::normalizeNode($adaptation);
        if (!$adaptation instanceof \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\TraitUseAdaptation) {
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
    public function getNode() : \_PhpScoperedc2e0c967db\PhpParser\Node
    {
        return new \_PhpScoperedc2e0c967db\PhpParser\Node\Stmt\TraitUse($this->traits, $this->adaptations);
    }
}
