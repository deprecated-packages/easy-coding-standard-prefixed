<?php

declare (strict_types=1);
namespace _PhpScoperdf15f2b748e9\PhpParser\Builder;

use _PhpScoperdf15f2b748e9\PhpParser;
use _PhpScoperdf15f2b748e9\PhpParser\BuilderHelpers;
use _PhpScoperdf15f2b748e9\PhpParser\Node;
use _PhpScoperdf15f2b748e9\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperdf15f2b748e9\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperdf15f2b748e9\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperdf15f2b748e9\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperdf15f2b748e9\PhpParser\Node
    {
        return new \_PhpScoperdf15f2b748e9\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
