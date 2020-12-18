<?php

declare (strict_types=1);
namespace _PhpScoperd8b12759ee0d\PhpParser\Builder;

use _PhpScoperd8b12759ee0d\PhpParser;
use _PhpScoperd8b12759ee0d\PhpParser\BuilderHelpers;
use _PhpScoperd8b12759ee0d\PhpParser\Node;
use _PhpScoperd8b12759ee0d\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperd8b12759ee0d\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperd8b12759ee0d\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperd8b12759ee0d\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperd8b12759ee0d\PhpParser\Node
    {
        return new \_PhpScoperd8b12759ee0d\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
