<?php

declare (strict_types=1);
namespace _PhpScoperca8ca183ac38\PhpParser\Builder;

use _PhpScoperca8ca183ac38\PhpParser;
use _PhpScoperca8ca183ac38\PhpParser\BuilderHelpers;
use _PhpScoperca8ca183ac38\PhpParser\Node;
use _PhpScoperca8ca183ac38\PhpParser\Node\Stmt;
class Function_ extends \_PhpScoperca8ca183ac38\PhpParser\Builder\FunctionLike
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
        $this->stmts[] = \_PhpScoperca8ca183ac38\PhpParser\BuilderHelpers::normalizeStmt($stmt);
        return $this;
    }
    /**
     * Returns the built function node.
     *
     * @return Stmt\Function_ The built function node
     */
    public function getNode() : \_PhpScoperca8ca183ac38\PhpParser\Node
    {
        return new \_PhpScoperca8ca183ac38\PhpParser\Node\Stmt\Function_($this->name, ['byRef' => $this->returnByRef, 'params' => $this->params, 'returnType' => $this->returnType, 'stmts' => $this->stmts], $this->attributes);
    }
}
