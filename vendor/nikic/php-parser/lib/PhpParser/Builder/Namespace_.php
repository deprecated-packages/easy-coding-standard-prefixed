<?php

declare (strict_types=1);
namespace _PhpScoper08748c77fa1c\PhpParser\Builder;

use _PhpScoper08748c77fa1c\PhpParser;
use _PhpScoper08748c77fa1c\PhpParser\BuilderHelpers;
use _PhpScoper08748c77fa1c\PhpParser\Node;
use _PhpScoper08748c77fa1c\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper08748c77fa1c\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper08748c77fa1c\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper08748c77fa1c\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper08748c77fa1c\PhpParser\Node
    {
        return new \_PhpScoper08748c77fa1c\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
