<?php

declare (strict_types=1);
namespace _PhpScoper4a718ec9156e\PhpParser\Builder;

use _PhpScoper4a718ec9156e\PhpParser;
use _PhpScoper4a718ec9156e\PhpParser\BuilderHelpers;
use _PhpScoper4a718ec9156e\PhpParser\Node;
use _PhpScoper4a718ec9156e\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper4a718ec9156e\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper4a718ec9156e\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper4a718ec9156e\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper4a718ec9156e\PhpParser\Node
    {
        return new \_PhpScoper4a718ec9156e\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
