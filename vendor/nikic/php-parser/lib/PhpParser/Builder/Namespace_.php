<?php

declare (strict_types=1);
namespace _PhpScoperc7c7dddc9238\PhpParser\Builder;

use _PhpScoperc7c7dddc9238\PhpParser;
use _PhpScoperc7c7dddc9238\PhpParser\BuilderHelpers;
use _PhpScoperc7c7dddc9238\PhpParser\Node;
use _PhpScoperc7c7dddc9238\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperc7c7dddc9238\PhpParser\Builder\Declaration
{
    private $name;
    private $stmts = [];
    /**
     * Creates a namespace builder.
     *
     * @param Node\Name|string|null $name Name of the namespace
     */
    public function __construct($name)
    {
        $this->name = null !== $name ? \_PhpScoperc7c7dddc9238\PhpParser\BuilderHelpers::normalizeName($name) : null;
    }
    /**
     * Adds a statement.
     *
     * @param Node|PhpParser\Builder $stmt The statement to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmt($stmt)
    {
        $this->stmts[] = \_PhpScoperc7c7dddc9238\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperc7c7dddc9238\PhpParser\Node
    {
        return new \_PhpScoperc7c7dddc9238\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
