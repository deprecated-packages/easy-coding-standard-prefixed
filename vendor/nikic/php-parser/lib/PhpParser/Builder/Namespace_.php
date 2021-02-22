<?php

declare (strict_types=1);
namespace _PhpScoper10b1b2c5ca55\PhpParser\Builder;

use _PhpScoper10b1b2c5ca55\PhpParser;
use _PhpScoper10b1b2c5ca55\PhpParser\BuilderHelpers;
use _PhpScoper10b1b2c5ca55\PhpParser\Node;
use _PhpScoper10b1b2c5ca55\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper10b1b2c5ca55\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper10b1b2c5ca55\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper10b1b2c5ca55\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper10b1b2c5ca55\PhpParser\Node
    {
        return new \_PhpScoper10b1b2c5ca55\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
