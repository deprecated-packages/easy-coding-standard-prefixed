<?php

declare (strict_types=1);
namespace _PhpScoperfd70a7e8e84f\PhpParser\Builder;

use _PhpScoperfd70a7e8e84f\PhpParser;
use _PhpScoperfd70a7e8e84f\PhpParser\BuilderHelpers;
use _PhpScoperfd70a7e8e84f\PhpParser\Node;
use _PhpScoperfd70a7e8e84f\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperfd70a7e8e84f\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoperfd70a7e8e84f\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperfd70a7e8e84f\PhpParser\Node
    {
        return new \_PhpScoperfd70a7e8e84f\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
