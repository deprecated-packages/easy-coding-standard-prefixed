<?php

declare (strict_types=1);
namespace _PhpScoperea337ed74749\PhpParser\Builder;

use _PhpScoperea337ed74749\PhpParser;
use _PhpScoperea337ed74749\PhpParser\BuilderHelpers;
use _PhpScoperea337ed74749\PhpParser\Node;
use _PhpScoperea337ed74749\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperea337ed74749\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperea337ed74749\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperea337ed74749\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperea337ed74749\PhpParser\Node
    {
        return new \_PhpScoperea337ed74749\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
