<?php

declare (strict_types=1);
namespace _PhpScopera6f918786d5c\PhpParser\Builder;

use _PhpScopera6f918786d5c\PhpParser;
use _PhpScopera6f918786d5c\PhpParser\BuilderHelpers;
use _PhpScopera6f918786d5c\PhpParser\Node;
use _PhpScopera6f918786d5c\PhpParser\Node\Stmt;
class Function_ extends \_PhpScopera6f918786d5c\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScopera6f918786d5c\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScopera6f918786d5c\PhpParser\Node
    {
        return new \_PhpScopera6f918786d5c\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
