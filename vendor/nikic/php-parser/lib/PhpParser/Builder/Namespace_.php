<?php

declare (strict_types=1);
namespace _PhpScoperb83706991c7f\PhpParser\Builder;

use _PhpScoperb83706991c7f\PhpParser;
use _PhpScoperb83706991c7f\PhpParser\BuilderHelpers;
use _PhpScoperb83706991c7f\PhpParser\Node;
use _PhpScoperb83706991c7f\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperb83706991c7f\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperb83706991c7f\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperb83706991c7f\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperb83706991c7f\PhpParser\Node
    {
        return new \_PhpScoperb83706991c7f\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
