<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Builder;

use _PhpScoperdc8fbcd7c69d\PhpParser;
use _PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperdc8fbcd7c69d\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperdc8fbcd7c69d\PhpParser\Node
    {
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
