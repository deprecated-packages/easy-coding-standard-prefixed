<?php

declare (strict_types=1);
namespace _PhpScopera749ac204cd2\PhpParser\Builder;

use _PhpScopera749ac204cd2\PhpParser;
use _PhpScopera749ac204cd2\PhpParser\BuilderHelpers;
use _PhpScopera749ac204cd2\PhpParser\Node;
use _PhpScopera749ac204cd2\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScopera749ac204cd2\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScopera749ac204cd2\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScopera749ac204cd2\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScopera749ac204cd2\PhpParser\Node
    {
        return new \_PhpScopera749ac204cd2\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
