<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\Builder;

use _PhpScoperbc5235eb86f3\PhpParser;
use _PhpScoperbc5235eb86f3\PhpParser\BuilderHelpers;
use _PhpScoperbc5235eb86f3\PhpParser\Node;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperbc5235eb86f3\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperbc5235eb86f3\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperbc5235eb86f3\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperbc5235eb86f3\PhpParser\Node
    {
        return new \_PhpScoperbc5235eb86f3\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
