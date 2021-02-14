<?php

declare (strict_types=1);
namespace _PhpScoperf361a7d70552\PhpParser\Builder;

use _PhpScoperf361a7d70552\PhpParser;
use _PhpScoperf361a7d70552\PhpParser\BuilderHelpers;
use _PhpScoperf361a7d70552\PhpParser\Node;
use _PhpScoperf361a7d70552\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperf361a7d70552\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperf361a7d70552\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperf361a7d70552\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperf361a7d70552\PhpParser\Node
    {
        return new \_PhpScoperf361a7d70552\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
