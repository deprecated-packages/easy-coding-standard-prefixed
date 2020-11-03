<?php

declare (strict_types=1);
namespace _PhpScoperaad82bb90a86\PhpParser\Builder;

use _PhpScoperaad82bb90a86\PhpParser;
use _PhpScoperaad82bb90a86\PhpParser\BuilderHelpers;
use _PhpScoperaad82bb90a86\PhpParser\Node;
use _PhpScoperaad82bb90a86\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoperaad82bb90a86\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoperaad82bb90a86\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoperaad82bb90a86\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoperaad82bb90a86\PhpParser\Node
    {
        return new \_PhpScoperaad82bb90a86\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
