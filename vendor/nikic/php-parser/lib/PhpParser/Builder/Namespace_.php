<?php

declare (strict_types=1);
namespace _PhpScoper246d3630afdd\PhpParser\Builder;

use _PhpScoper246d3630afdd\PhpParser;
use _PhpScoper246d3630afdd\PhpParser\BuilderHelpers;
use _PhpScoper246d3630afdd\PhpParser\Node;
use _PhpScoper246d3630afdd\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper246d3630afdd\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper246d3630afdd\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper246d3630afdd\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper246d3630afdd\PhpParser\Node
    {
        return new \_PhpScoper246d3630afdd\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
