<?php

declare (strict_types=1);
namespace _PhpScoperbc5235eb86f3\PhpParser\Builder;

use _PhpScoperbc5235eb86f3\PhpParser;
use _PhpScoperbc5235eb86f3\PhpParser\BuilderHelpers;
use _PhpScoperbc5235eb86f3\PhpParser\Node;
use _PhpScoperbc5235eb86f3\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperbc5235eb86f3\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoperbc5235eb86f3\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperbc5235eb86f3\PhpParser\Node
    {
        return new \_PhpScoperbc5235eb86f3\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
