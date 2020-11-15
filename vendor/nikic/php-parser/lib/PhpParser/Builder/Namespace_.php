<?php

declare (strict_types=1);
namespace _PhpScoper64a921a5401b\PhpParser\Builder;

use _PhpScoper64a921a5401b\PhpParser;
use _PhpScoper64a921a5401b\PhpParser\BuilderHelpers;
use _PhpScoper64a921a5401b\PhpParser\Node;
use _PhpScoper64a921a5401b\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper64a921a5401b\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper64a921a5401b\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper64a921a5401b\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper64a921a5401b\PhpParser\Node
    {
        return new \_PhpScoper64a921a5401b\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
