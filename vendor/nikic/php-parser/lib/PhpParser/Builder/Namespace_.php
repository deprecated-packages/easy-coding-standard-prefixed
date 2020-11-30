<?php

declare (strict_types=1);
namespace _PhpScopera09818bc50da\PhpParser\Builder;

use _PhpScopera09818bc50da\PhpParser;
use _PhpScopera09818bc50da\PhpParser\BuilderHelpers;
use _PhpScopera09818bc50da\PhpParser\Node;
use _PhpScopera09818bc50da\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScopera09818bc50da\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScopera09818bc50da\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScopera09818bc50da\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScopera09818bc50da\PhpParser\Node
    {
        return new \_PhpScopera09818bc50da\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
