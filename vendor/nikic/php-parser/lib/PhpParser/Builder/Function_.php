<?php

declare (strict_types=1);
namespace _PhpScopera9d6b451df71\PhpParser\Builder;

use _PhpScopera9d6b451df71\PhpParser;
use _PhpScopera9d6b451df71\PhpParser\BuilderHelpers;
use _PhpScopera9d6b451df71\PhpParser\Node;
use _PhpScopera9d6b451df71\PhpParser\Node\Stmt;
class Function_ extends \_PhpScopera9d6b451df71\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScopera9d6b451df71\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScopera9d6b451df71\PhpParser\Node
    {
        return new \_PhpScopera9d6b451df71\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
