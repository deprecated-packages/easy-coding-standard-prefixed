<?php

declare (strict_types=1);
namespace _PhpScoperc83f84c90b60\PhpParser\Builder;

use _PhpScoperc83f84c90b60\PhpParser;
use _PhpScoperc83f84c90b60\PhpParser\BuilderHelpers;
use _PhpScoperc83f84c90b60\PhpParser\Node;
use _PhpScoperc83f84c90b60\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperc83f84c90b60\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperc83f84c90b60\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperc83f84c90b60\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperc83f84c90b60\PhpParser\Node
    {
        return new \_PhpScoperc83f84c90b60\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
