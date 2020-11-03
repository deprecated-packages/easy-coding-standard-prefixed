<?php

declare (strict_types=1);
namespace _PhpScoper5928e324b45e\PhpParser\Builder;

use _PhpScoper5928e324b45e\PhpParser\Builder;
use _PhpScoper5928e324b45e\PhpParser\BuilderHelpers;
use _PhpScoper5928e324b45e\PhpParser\Node;
use _PhpScoper5928e324b45e\PhpParser\Node\Stmt;
class TraitUse implements \_PhpScoper5928e324b45e\PhpParser\Builder
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
        $this->traits[] = \_PhpScoper5928e324b45e\PhpParser\BuilderHelpers::normalizeName($trait);
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
        $adaptation = \_PhpScoper5928e324b45e\PhpParser\BuilderHelpers::normalizeNode($adaptation);
        if (!$adaptation instanceof \_PhpScoper5928e324b45e\PhpParser\Node\Stmt\TraitUseAdaptation) {
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
    public function getNode() : \_PhpScoper5928e324b45e\PhpParser\Node
    {
        return new \_PhpScoper5928e324b45e\PhpParser\Node\Stmt\TraitUse($this->traits, $this->adaptations);
    }
}
