<?php

declare (strict_types=1);
namespace _PhpScoperecb978830f1e\PhpParser\Builder;

use _PhpScoperecb978830f1e\PhpParser;
use _PhpScoperecb978830f1e\PhpParser\BuilderHelpers;
use _PhpScoperecb978830f1e\PhpParser\Node;
use _PhpScoperecb978830f1e\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperecb978830f1e\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoperecb978830f1e\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperecb978830f1e\PhpParser\Node
    {
        return new \_PhpScoperecb978830f1e\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
