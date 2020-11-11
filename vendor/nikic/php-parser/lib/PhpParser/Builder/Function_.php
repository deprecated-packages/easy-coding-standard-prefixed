<?php

declare (strict_types=1);
namespace _PhpScoper0f5cd390c37a\PhpParser\Builder;

use _PhpScoper0f5cd390c37a\PhpParser;
use _PhpScoper0f5cd390c37a\PhpParser\BuilderHelpers;
use _PhpScoper0f5cd390c37a\PhpParser\Node;
use _PhpScoper0f5cd390c37a\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoper0f5cd390c37a\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoper0f5cd390c37a\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoper0f5cd390c37a\PhpParser\Node
    {
        return new \_PhpScoper0f5cd390c37a\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
