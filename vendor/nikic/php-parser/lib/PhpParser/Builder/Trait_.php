<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\PhpParser\Builder;

use _PhpScoper3e1e0e5bb8ef\PhpParser;
use _PhpScoper3e1e0e5bb8ef\PhpParser\BuilderHelpers;
use _PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt;
class Trait_ extends \_PhpScoper3e1e0e5bb8ef\PhpParser\Builder\Declaration
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
        $stmt = \_PhpScoper3e1e0e5bb8ef\PhpParser\BuilderHelpers::normalizeNode($stmt);
        if ($stmt instanceof \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Property) {
            $this->properties[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\ClassMethod) {
            $this->methods[] = $stmt;
        } elseif ($stmt instanceof \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\TraitUse) {
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
    public function getNode() : \_PhpScoper3e1e0e5bb8ef\PhpParser\Node
    {
        return new \_PhpScoper3e1e0e5bb8ef\PhpParser\Node\Stmt\Trait_($this->name, ['stmts' => \array_merge($this->uses, $this->properties, $this->methods)], $this->attributes);
    }
}
