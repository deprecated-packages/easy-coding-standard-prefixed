<?php

declare (strict_types=1);
namespace _PhpScoper17bb67c99ade\PhpParser\Builder;

use _PhpScoper17bb67c99ade\PhpParser;
use _PhpScoper17bb67c99ade\PhpParser\BuilderHelpers;
use _PhpScoper17bb67c99ade\PhpParser\Node;
use _PhpScoper17bb67c99ade\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper17bb67c99ade\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper17bb67c99ade\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper17bb67c99ade\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper17bb67c99ade\PhpParser\Node
    {
        return new \_PhpScoper17bb67c99ade\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
