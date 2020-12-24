<?php

declare (strict_types=1);
namespace _PhpScopera37d6fb0b1ab\PhpParser\Builder;

use _PhpScopera37d6fb0b1ab\PhpParser;
use _PhpScopera37d6fb0b1ab\PhpParser\BuilderHelpers;
use _PhpScopera37d6fb0b1ab\PhpParser\Node;
use _PhpScopera37d6fb0b1ab\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScopera37d6fb0b1ab\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScopera37d6fb0b1ab\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScopera37d6fb0b1ab\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScopera37d6fb0b1ab\PhpParser\Node
    {
        return new \_PhpScopera37d6fb0b1ab\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
