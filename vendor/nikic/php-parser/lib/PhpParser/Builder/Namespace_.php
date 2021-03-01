<?php

declare (strict_types=1);
namespace _PhpScoperf3dc21757def\PhpParser\Builder;

use _PhpScoperf3dc21757def\PhpParser;
use _PhpScoperf3dc21757def\PhpParser\BuilderHelpers;
use _PhpScoperf3dc21757def\PhpParser\Node;
use _PhpScoperf3dc21757def\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperf3dc21757def\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperf3dc21757def\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperf3dc21757def\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperf3dc21757def\PhpParser\Node
    {
        return new \_PhpScoperf3dc21757def\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
