<?php

declare (strict_types=1);
namespace _PhpScoperc8b83ee8976a\PhpParser\Builder;

use _PhpScoperc8b83ee8976a\PhpParser;
use _PhpScoperc8b83ee8976a\PhpParser\BuilderHelpers;
use _PhpScoperc8b83ee8976a\PhpParser\Node;
use _PhpScoperc8b83ee8976a\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperc8b83ee8976a\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoperc8b83ee8976a\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperc8b83ee8976a\PhpParser\Node
    {
        return new \_PhpScoperc8b83ee8976a\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
