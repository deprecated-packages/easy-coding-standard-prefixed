<?php

declare (strict_types=1);
namespace _PhpScoper5c006f5f032f\PhpParser\Builder;

use _PhpScoper5c006f5f032f\PhpParser;
use _PhpScoper5c006f5f032f\PhpParser\BuilderHelpers;
use _PhpScoper5c006f5f032f\PhpParser\Node;
use _PhpScoper5c006f5f032f\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper5c006f5f032f\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper5c006f5f032f\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper5c006f5f032f\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper5c006f5f032f\PhpParser\Node
    {
        return new \_PhpScoper5c006f5f032f\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
