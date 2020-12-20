<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Builder;

use _PhpScoperba24099fc6fd\PhpParser;
use _PhpScoperba24099fc6fd\PhpParser\BuilderHelpers;
use _PhpScoperba24099fc6fd\PhpParser\Node\Stmt;
class Trait_ extends \_PhpScoperba24099fc6fd\PhpParser\Builder\Declaration
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
        $stmt = \_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeNode($stmt);
        if ($stmt instanceof \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\Property) {
            $this->properties[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\ClassMethod) {
            $this->methods[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\TraitUse) {
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
    public function getNode() : \_PhpScoperba24099fc6fd\PhpParser\Node
    {
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\Trait_($this->name, ['stmts' => \array_merge($this->uses, $this->properties, $this->methods)], $this->attributes);
    }
}
