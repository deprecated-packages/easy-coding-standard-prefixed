<?php

declare (strict_types=1);
namespace _PhpScopera8f555a7493c\PhpParser\Builder;

use _PhpScopera8f555a7493c\PhpParser;
use _PhpScopera8f555a7493c\PhpParser\BuilderHelpers;
use _PhpScopera8f555a7493c\PhpParser\Node;
use _PhpScopera8f555a7493c\PhpParser\Node\Stmt;
class Function_ extends \_PhpScopera8f555a7493c\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScopera8f555a7493c\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScopera8f555a7493c\PhpParser\Node
    {
        return new \_PhpScopera8f555a7493c\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
