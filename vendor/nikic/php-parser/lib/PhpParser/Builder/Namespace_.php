<?php

declare (strict_types=1);
namespace _PhpScoper04022cd986ec\PhpParser\Builder;

use _PhpScoper04022cd986ec\PhpParser;
use _PhpScoper04022cd986ec\PhpParser\BuilderHelpers;
use _PhpScoper04022cd986ec\PhpParser\Node;
use _PhpScoper04022cd986ec\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper04022cd986ec\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper04022cd986ec\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper04022cd986ec\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper04022cd986ec\PhpParser\Node
    {
        return new \_PhpScoper04022cd986ec\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
