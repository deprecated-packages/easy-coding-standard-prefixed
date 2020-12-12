<?php

declare (strict_types=1);
namespace _PhpScoperbd5c5a045153\PhpParser\Builder;

use _PhpScoperbd5c5a045153\PhpParser;
use _PhpScoperbd5c5a045153\PhpParser\BuilderHelpers;
use _PhpScoperbd5c5a045153\PhpParser\Node;
use _PhpScoperbd5c5a045153\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperbd5c5a045153\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperbd5c5a045153\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperbd5c5a045153\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperbd5c5a045153\PhpParser\Node
    {
        return new \_PhpScoperbd5c5a045153\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
