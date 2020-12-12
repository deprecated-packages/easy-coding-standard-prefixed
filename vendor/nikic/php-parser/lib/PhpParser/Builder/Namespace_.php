<?php

declare (strict_types=1);
namespace _PhpScoper79449c4e744b\PhpParser\Builder;

use _PhpScoper79449c4e744b\PhpParser;
use _PhpScoper79449c4e744b\PhpParser\BuilderHelpers;
use _PhpScoper79449c4e744b\PhpParser\Node;
use _PhpScoper79449c4e744b\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper79449c4e744b\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper79449c4e744b\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper79449c4e744b\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper79449c4e744b\PhpParser\Node
    {
        return new \_PhpScoper79449c4e744b\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
