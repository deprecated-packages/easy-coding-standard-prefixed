<?php

declare (strict_types=1);
namespace _PhpScoperbaf90856897c\PhpParser\Builder;

use _PhpScoperbaf90856897c\PhpParser;
use _PhpScoperbaf90856897c\PhpParser\BuilderHelpers;
use _PhpScoperbaf90856897c\PhpParser\Node;
use _PhpScoperbaf90856897c\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperbaf90856897c\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperbaf90856897c\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperbaf90856897c\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperbaf90856897c\PhpParser\Node
    {
        return new \_PhpScoperbaf90856897c\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
