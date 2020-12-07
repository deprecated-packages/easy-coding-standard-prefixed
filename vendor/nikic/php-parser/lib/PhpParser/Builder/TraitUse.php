<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Builder;

use _PhpScoperb73f9e44f4eb\PhpParser\Builder;
use _PhpScoperb73f9e44f4eb\PhpParser\BuilderHelpers;
use _PhpScoperb73f9e44f4eb\PhpParser\Node;
use _PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt;
class TraitUse implements \_PhpScoperb73f9e44f4eb\PhpParser\Builder
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
        $this->traits[] = \_PhpScoperb73f9e44f4eb\PhpParser\BuilderHelpers::normalizeName($trait);
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
        $adaptation = \_PhpScoperb73f9e44f4eb\PhpParser\BuilderHelpers::normalizeNode($adaptation);
        if (!$adaptation instanceof \_PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt\TraitUseAdaptation) {
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
    public function getNode() : \_PhpScoperb73f9e44f4eb\PhpParser\Node
    {
        return new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt\TraitUse($this->traits, $this->adaptations);
    }
}
