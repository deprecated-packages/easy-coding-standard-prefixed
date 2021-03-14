<?php

declare (strict_types=1);
namespace _PhpScoperfb0714773dc5\PhpParser\Builder;

use _PhpScoperfb0714773dc5\PhpParser;
use _PhpScoperfb0714773dc5\PhpParser\BuilderHelpers;
use _PhpScoperfb0714773dc5\PhpParser\Node;
use _PhpScoperfb0714773dc5\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperfb0714773dc5\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperfb0714773dc5\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperfb0714773dc5\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperfb0714773dc5\PhpParser\Node
    {
        return new \_PhpScoperfb0714773dc5\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
