<?php

declare (strict_types=1);
namespace _PhpScopera88a8b9f064a\PhpParser\Builder;

use _PhpScopera88a8b9f064a\PhpParser;
use _PhpScopera88a8b9f064a\PhpParser\BuilderHelpers;
use _PhpScopera88a8b9f064a\PhpParser\Node;
use _PhpScopera88a8b9f064a\PhpParser\Node\Stmt;
class Function_ extends \_PhpScopera88a8b9f064a\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScopera88a8b9f064a\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScopera88a8b9f064a\PhpParser\Node
    {
        return new \_PhpScopera88a8b9f064a\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
