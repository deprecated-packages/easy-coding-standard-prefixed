<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Builder;

use _PhpScoperba24099fc6fd\PhpParser;
use _PhpScoperba24099fc6fd\PhpParser\BuilderHelpers;
use _PhpScoperba24099fc6fd\PhpParser\Node;
use _PhpScoperba24099fc6fd\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperba24099fc6fd\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperba24099fc6fd\PhpParser\Node
    {
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
