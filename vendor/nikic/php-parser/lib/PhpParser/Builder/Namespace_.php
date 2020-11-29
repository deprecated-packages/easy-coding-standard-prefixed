<?php

declare (strict_types=1);
namespace _PhpScoper9d73a84b09ad\PhpParser\Builder;

use _PhpScoper9d73a84b09ad\PhpParser;
use _PhpScoper9d73a84b09ad\PhpParser\BuilderHelpers;
use _PhpScoper9d73a84b09ad\PhpParser\Node;
use _PhpScoper9d73a84b09ad\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper9d73a84b09ad\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper9d73a84b09ad\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper9d73a84b09ad\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper9d73a84b09ad\PhpParser\Node
    {
        return new \_PhpScoper9d73a84b09ad\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
