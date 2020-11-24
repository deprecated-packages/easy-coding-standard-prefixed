<?php

declare (strict_types=1);
namespace _PhpScoper528afa732cbd\PhpParser\Builder;

use _PhpScoper528afa732cbd\PhpParser;
use _PhpScoper528afa732cbd\PhpParser\BuilderHelpers;
use _PhpScoper528afa732cbd\PhpParser\Node;
use _PhpScoper528afa732cbd\PhpParser\Node\Stmt;
class Namespace_ extends \_PhpScoper528afa732cbd\PhpParser\Builder\Declaration
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
        $this->name = null !== $name ? \_PhpScoper528afa732cbd\PhpParser\BuilderHelpers::normalizeName($name) : null;
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
        $this->stmts[] = \_PhpScoper528afa732cbd\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built node.
     *
     * @return Node The built node
     */
    public function getNode() : \_PhpScoper528afa732cbd\PhpParser\Node
    {
        return new \_PhpScoper528afa732cbd\PhpParser\Node\Stmt\Namespace_($this->name, $this->stmts, $this->attributes);
    }
}
