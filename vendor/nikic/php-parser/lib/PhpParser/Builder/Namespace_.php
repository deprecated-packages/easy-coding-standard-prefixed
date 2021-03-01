<?php

declare (strict_types=1);
namespace _PhpScoperc4ea0f0bd23f\PhpParser\Builder;

use _PhpScoperc4ea0f0bd23f\PhpParser;
use _PhpScoperc4ea0f0bd23f\PhpParser\BuilderHelpers;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node;
use _PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperc4ea0f0bd23f\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperc4ea0f0bd23f\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperc4ea0f0bd23f\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperc4ea0f0bd23f\PhpParser\Node
    {
        return new \_PhpScoperc4ea0f0bd23f\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
