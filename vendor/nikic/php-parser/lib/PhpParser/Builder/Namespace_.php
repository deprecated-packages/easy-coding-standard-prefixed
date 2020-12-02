<?php

declare (strict_types=1);
namespace _PhpScoperc95ae4bf942a\PhpParser\Builder;

use _PhpScoperc95ae4bf942a\PhpParser;
use _PhpScoperc95ae4bf942a\PhpParser\BuilderHelpers;
use _PhpScoperc95ae4bf942a\PhpParser\Node;
use _PhpScoperc95ae4bf942a\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperc95ae4bf942a\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperc95ae4bf942a\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperc95ae4bf942a\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperc95ae4bf942a\PhpParser\Node
    {
        return new \_PhpScoperc95ae4bf942a\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
