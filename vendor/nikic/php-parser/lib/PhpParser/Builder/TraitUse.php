<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Builder;

use _PhpScoperba24099fc6fd\PhpParser\Builder;
use _PhpScoperba24099fc6fd\PhpParser\BuilderHelpers;
use _PhpScoperba24099fc6fd\PhpParser\Node;
use _PhpScoperba24099fc6fd\PhpParser\Node\Stmt;
class TraitUse implements \_PhpScoperba24099fc6fd\PhpParser\Builder
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
        $this->traits[] = \_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeName($trait);
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
        $adaptation = \_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeNode($adaptation);
        if (!$adaptation instanceof \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\TraitUseAdaptation) {
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
    public function getNode() : \_PhpScoperba24099fc6fd\PhpParser\Node
    {
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\TraitUse($this->traits, $this->adaptations);
    }
}
