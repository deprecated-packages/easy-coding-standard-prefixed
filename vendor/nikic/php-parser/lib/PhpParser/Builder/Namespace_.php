<?php

declare (strict_types=1);
namespace _PhpScoper4e47e3b12394\PhpParser\Builder;

use _PhpScoper4e47e3b12394\PhpParser;
use _PhpScoper4e47e3b12394\PhpParser\BuilderHelpers;
use _PhpScoper4e47e3b12394\PhpParser\Node;
use _PhpScoper4e47e3b12394\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper4e47e3b12394\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper4e47e3b12394\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper4e47e3b12394\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper4e47e3b12394\PhpParser\Node
    {
        return new \_PhpScoper4e47e3b12394\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
