<?php

declare (strict_types=1);
namespace _PhpScoper2a8ad010dfbd\PhpParser\Builder;

use _PhpScoper2a8ad010dfbd\PhpParser\Builder;
use _PhpScoper2a8ad010dfbd\PhpParser\BuilderHelpers;
use _PhpScoper2a8ad010dfbd\PhpParser\Node;
use _PhpScoper2a8ad010dfbd\PhpParser\Node\Stmt;
class TraitUse implements \_PhpScoper2a8ad010dfbd\PhpParser\Builder
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
        $this->traits[] = \_PhpScoper2a8ad010dfbd\PhpParser\BuilderHelpers::normalizeName($trait);
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
        $adaptation = \_PhpScoper2a8ad010dfbd\PhpParser\BuilderHelpers::normalizeNode($adaptation);
        if (!$adaptation instanceof \_PhpScoper2a8ad010dfbd\PhpParser\Node\Stmt\TraitUseAdaptation) {
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
    public function getNode() : \_PhpScoper2a8ad010dfbd\PhpParser\Node
    {
        return new \_PhpScoper2a8ad010dfbd\PhpParser\Node\Stmt\TraitUse($this->traits, $this->adaptations);
    }
}
