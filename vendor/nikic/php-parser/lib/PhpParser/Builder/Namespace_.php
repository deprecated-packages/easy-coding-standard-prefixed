<?php

declare (strict_types=1);
namespace _PhpScoper0270f1d35181\PhpParser\Builder;

use _PhpScoper0270f1d35181\PhpParser;
use _PhpScoper0270f1d35181\PhpParser\BuilderHelpers;
use _PhpScoper0270f1d35181\PhpParser\Node;
use _PhpScoper0270f1d35181\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper0270f1d35181\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper0270f1d35181\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper0270f1d35181\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper0270f1d35181\PhpParser\Node
    {
        return new \_PhpScoper0270f1d35181\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
