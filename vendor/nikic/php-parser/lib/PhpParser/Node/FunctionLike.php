<?php

declare (strict_types=1);
namespace _PhpScoper3e1e0e5bb8ef\PhpParser\Node;

use _PhpScoper3e1e0e5bb8ef\PhpParser\Node;
interface FunctionLike extends \_PhpScoper3e1e0e5bb8ef\PhpParser\Node
{
    /**
     * Whether to return by reference
     *
     * @return bool
     */
    public function returnsByRef() : bool;
    /**
     * List of parameters
     *
     * @return Node\Param[]
     */
    public function getParams() : array;
    /**
     * Get the declared return type or null
     *
     * @return null|Identifier|Node\Name|Node\NullableType|Node\UnionType
     */
    public function getReturnType();
    /**
     * The function body
     *
     * @return Node\Stmt[]|null
     */
    public function getStmts();
}
