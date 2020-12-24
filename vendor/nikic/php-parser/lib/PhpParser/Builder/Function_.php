<?php

declare (strict_types=1);
namespace _PhpScoper629192f0909b\PhpParser\Builder;

use _PhpScoper629192f0909b\PhpParser;
use _PhpScoper629192f0909b\PhpParser\BuilderHelpers;
use _PhpScoper629192f0909b\PhpParser\Node;
use _PhpScoper629192f0909b\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoper629192f0909b\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoper629192f0909b\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoper629192f0909b\PhpParser\Node
    {
        return new \_PhpScoper629192f0909b\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
