<?php

declare (strict_types=1);
namespace _PhpScoperb73f9e44f4eb\PhpParser\Builder;

use _PhpScoperb73f9e44f4eb\PhpParser;
use _PhpScoperb73f9e44f4eb\PhpParser\BuilderHelpers;
use _PhpScoperb73f9e44f4eb\PhpParser\Node;
use _PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperb73f9e44f4eb\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoperb73f9e44f4eb\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperb73f9e44f4eb\PhpParser\Node
    {
        return new \_PhpScoperb73f9e44f4eb\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
