<?php

declare (strict_types=1);
namespace _PhpScoper842c7347e6be\PhpParser\Builder;

use _PhpScoper842c7347e6be\PhpParser;
use _PhpScoper842c7347e6be\PhpParser\BuilderHelpers;
use _PhpScoper842c7347e6be\PhpParser\Node;
use _PhpScoper842c7347e6be\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper842c7347e6be\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper842c7347e6be\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper842c7347e6be\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper842c7347e6be\PhpParser\Node
    {
        return new \_PhpScoper842c7347e6be\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
