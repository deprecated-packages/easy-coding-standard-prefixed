<?php

declare (strict_types=1);
namespace _PhpScoperdc8fbcd7c69d\PhpParser\Builder;

use _PhpScoperdc8fbcd7c69d\PhpParser;
use _PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node;
use _PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperdc8fbcd7c69d\PhpParser\Builder\FunctionLike
{
    protected $name;
    protected $stmts = [];
    /**
     * Creates a function builder.
     *
     * @param string $name Name of the function
     */
    public function __construct(string $name)
    {
        $this->name = $name;
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
        $this->stmts[] = \_PhpScoperdc8fbcd7c69d\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperdc8fbcd7c69d\PhpParser\Node
    {
        return new \_PhpScoperdc8fbcd7c69d\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
