<?php

declare (strict_types=1);
namespace _PhpScoperb458b528613f\PhpParser\Builder;

use _PhpScoperb458b528613f\PhpParser;
use _PhpScoperb458b528613f\PhpParser\BuilderHelpers;
use _PhpScoperb458b528613f\PhpParser\Node;
use _PhpScoperb458b528613f\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperb458b528613f\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperb458b528613f\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperb458b528613f\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperb458b528613f\PhpParser\Node
    {
        return new \_PhpScoperb458b528613f\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
