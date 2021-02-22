<?php

declare (strict_types=1);
namespace _PhpScoperfcee700af3df\PhpParser\Builder;

use _PhpScoperfcee700af3df\PhpParser;
use _PhpScoperfcee700af3df\PhpParser\BuilderHelpers;
use _PhpScoperfcee700af3df\PhpParser\Node;
use _PhpScoperfcee700af3df\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperfcee700af3df\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperfcee700af3df\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperfcee700af3df\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperfcee700af3df\PhpParser\Node
    {
        return new \_PhpScoperfcee700af3df\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
