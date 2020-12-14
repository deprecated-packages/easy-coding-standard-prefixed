<?php

declare (strict_types=1);
namespace _PhpScoperc64a4ac1af35\PhpParser\Builder;

use _PhpScoperc64a4ac1af35\PhpParser;
use _PhpScoperc64a4ac1af35\PhpParser\BuilderHelpers;
use _PhpScoperc64a4ac1af35\PhpParser\Node\Stmt;
class Trait_ extends \_PhpScoperc64a4ac1af35\PhpParser\Builder\Declaration
{
    protected $name;
    protected $uses = [];
    protected $properties = [];
    protected $methods = [];
    /**
     * Creates an interface builder.
     *
     * @param string $name Name of the interface
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
    /**
     * Adds a statement.
     *
     * @param Stmt|PhpParser\Builder $stmt The statement to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmt($stmt)
    {
        $stmt = \_PhpScoperc64a4ac1af35\PhpParser\BuilderHelpers::normalizeNode($stmt);
        if ($stmt instanceof \_PhpScoperc64a4ac1af35\PhpParser\Node\Stmt\Property) {
            $this->properties[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoperc64a4ac1af35\PhpParser\Node\Stmt\ClassMethod) {
            $this->methods[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoperc64a4ac1af35\PhpParser\Node\Stmt\TraitUse) {
            $this->uses[] = $stmt;
        } else {
            throw new \LogicException(\sprintf('Unexpected node of type "%s"', $stmt->getType()));
        }
        return $this;
    }
    /**
     * Returns the built trait node.
     *
     * @return Stmt\Trait_ The built interface node
     */
    public function getNode() : \_PhpScoperc64a4ac1af35\PhpParser\Node
    {
        return new \_PhpScoperc64a4ac1af35\PhpParser\Node\Stmt\Trait_($this->name, ['stmts' => \array_merge($this->uses, $this->properties, $this->methods)], $this->attributes);
    }
}
