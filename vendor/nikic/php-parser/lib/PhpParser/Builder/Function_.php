<?php

declare (strict_types=1);
namespace _PhpScoperba24099fc6fd\PhpParser\Builder;

use _PhpScoperba24099fc6fd\PhpParser;
use _PhpScoperba24099fc6fd\PhpParser\BuilderHelpers;
use _PhpScoperba24099fc6fd\PhpParser\Node;
use _PhpScoperba24099fc6fd\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperba24099fc6fd\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoperba24099fc6fd\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperba24099fc6fd\PhpParser\Node
    {
        return new \_PhpScoperba24099fc6fd\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
