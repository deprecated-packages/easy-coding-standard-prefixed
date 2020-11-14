<?php

declare (strict_types=1);
namespace _PhpScoperb09c3ec8e01a\PhpParser\Builder;

use _PhpScoperb09c3ec8e01a\PhpParser;
use _PhpScoperb09c3ec8e01a\PhpParser\BuilderHelpers;
use _PhpScoperb09c3ec8e01a\PhpParser\Node;
use _PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperb09c3ec8e01a\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperb09c3ec8e01a\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperb09c3ec8e01a\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperb09c3ec8e01a\PhpParser\Node
    {
        return new \_PhpScoperb09c3ec8e01a\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
