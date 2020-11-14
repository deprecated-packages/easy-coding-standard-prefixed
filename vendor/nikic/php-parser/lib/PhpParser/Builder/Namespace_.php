<?php

declare (strict_types=1);
namespace _PhpScoperddde3ba4aebc\PhpParser\Builder;

use _PhpScoperddde3ba4aebc\PhpParser;
use _PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers;
use _PhpScoperddde3ba4aebc\PhpParser\Node;
use _PhpScoperddde3ba4aebc\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperddde3ba4aebc\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperddde3ba4aebc\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperddde3ba4aebc\PhpParser\Node
    {
        return new \_PhpScoperddde3ba4aebc\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
