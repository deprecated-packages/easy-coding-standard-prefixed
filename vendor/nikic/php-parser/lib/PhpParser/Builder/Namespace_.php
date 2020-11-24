<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\Builder;

use _PhpScoperfd70a7e8e84f\PhpParser;
use _PhpScoperfd70a7e8e84f\PhpParser\BuilderHelpers;
use _PhpScoperfd70a7e8e84f\PhpParser\Node;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperfd70a7e8e84f\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperfd70a7e8e84f\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperfd70a7e8e84f\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperfd70a7e8e84f\PhpParser\Node
    {
        return new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
