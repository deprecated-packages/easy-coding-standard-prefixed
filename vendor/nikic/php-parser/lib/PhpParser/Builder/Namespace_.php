<?php

declare (strict_types=1);
namespace _PhpScoperfacc742d2745\PhpParser\Builder;

use _PhpScoperfacc742d2745\PhpParser;
use _PhpScoperfacc742d2745\PhpParser\BuilderHelpers;
use _PhpScoperfacc742d2745\PhpParser\Node;
use _PhpScoperfacc742d2745\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperfacc742d2745\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperfacc742d2745\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperfacc742d2745\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperfacc742d2745\PhpParser\Node
    {
        return new \_PhpScoperfacc742d2745\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
