<?php

declare (strict_types=1);
namespace _PhpScoperd1a5bf00e83e\PhpParser\Builder;

use _PhpScoperd1a5bf00e83e\PhpParser;
use _PhpScoperd1a5bf00e83e\PhpParser\BuilderHelpers;
use _PhpScoperd1a5bf00e83e\PhpParser\Node;
use _PhpScoperd1a5bf00e83e\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperd1a5bf00e83e\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoperd1a5bf00e83e\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperd1a5bf00e83e\PhpParser\Node
    {
        return new \_PhpScoperd1a5bf00e83e\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
